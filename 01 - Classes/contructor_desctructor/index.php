<?php 

class MaClassTest
{
    private string $id;

    public function __construct(string $objectId)
    {
        $this->id = $objectId;

        echo "Je suis le constructeur de l'objet {$this->id}";
        echo "<br>";
    }

    public function __destruct()
    {
        echo "Je suis le destructeur de l'objet {$this->id}";
        echo "<br>";
    }
}

$a = new MaClassTest("AA");
$b = new MaClassTest("BB");

unset($a);

$c = new MaClassTest("CC");
$d = new MaClassTest("DD");

echo "Data Content..";
echo "<br>";
