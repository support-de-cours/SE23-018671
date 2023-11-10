<?php 
namespace App\Abstract;

abstract class AbstractController 
{
    protected function render(string $template, array $data=[])
    {
        // ReBuild locale variable
        // form: $data['books] => Array
        // to:   $books = Array
        foreach ($data as $key => $value)
        {
            $$key = $value;
        }
        
        // A. Sortie direct (dans le navigatuer)
        include_once TEMPLATE_PATH.$template.TEMPLATE_TYPE;
    }
}