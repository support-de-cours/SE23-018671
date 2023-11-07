<?php 

class MaClass
{
    const MA_CONSTANTE = "Valeur de constante";
    public static $propriete = "valeur de propriété";
    private static $propriete_2 = "valeur de la seconde propriété";
    
    public static function ma_method() {
        return "Valeur de methode";
    }
    public static function ma_method_2() {
        // return $this->propriete_2;
    }
}

$monObjet = new MaClass;

?>
<div><?= MaClass::MA_CONSTANTE ?></div>
<div><?= MaClass::$propriete ?></div>
<div><?= MaClass::ma_method() ?></div>
<div><?= MaClass::ma_method_2() ?></div>
<div><?= $monObjet->propriete ?></div>

