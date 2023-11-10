<?php 
namespace App\Abstract;

abstract class AbstractController 
{
    private string $controller;
    protected $model;


    function __construct()
    {
        create_crsf_token();
        
        // Defini le controller qui apple la class "ControllerAbstract"
        $this->controller = $this->defineCalledController();

        // Definition et instance de la classe model associé au controller courant
        $modelClassName = $this->getModelClassName();
        if (class_exists($modelClassName))
        {
            $this->model = new $modelClassName;
        }
    }

    protected function currentRoute(): array 
    {
        global $route;
        global $uri;

        $re_route = strToRegex('/', $route['path']);
        preg_match("@^".$re_route."$@i", $uri, $matches);

        return [
            $route, 
            $uri,
            'params' => [
                'id' => $matches[1]
            ]
        ];
    }

    protected function render(string $template, array $data=[])
    {
        // ReBuild locale variable
        // form: $data['books] => Array
        // to:   $books = Array
        foreach ($data as $property => $value)
        {
            $$property = $value;
        }
        
        // A. Sortie direct (dans le navigatuer)
        include_once TEMPLATE_PATH.$template.TEMPLATE_TYPE;
    }

    protected function json(array $data, string $routeName)
    {
        array_walk($data, fn(&$item) => $item->link = url($routeName, ['id' => $item->id], true) );
        // foreach ($data as $key => $item)
        // {
        //     $link = url(
        //         $routeName, 
        //         ['id' => $item->id], 
        //         true
        //     );

        //     $data[$key]->link = $link;
        // }

        $json = json_encode($data);
        header('Content-Type: application/json');
        header_remove('x-powered-by');

        return $json;
    }

    private function defineCalledController(): string
    {
        $class = get_called_class();
        $class = explode("\\", $class);
        $class = end($class);
        $class = str_replace("Controller", '', $class);

        return $class;
    }

    private function getModelClassName(): string 
    {
        return "App\\Model\\".$this->controller . "Model";
    }
}