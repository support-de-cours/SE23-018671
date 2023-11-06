<?php

// Namespace

// Use

// Declaration de classe
class MaClasse {

    // Constantes
    const MA_CONTANTE = "Valeur de la constante";

    // Propriétés / Attributs
    public $ma_premiere_propriete;
    public $maSecondePropriete;
    public string $maTroisiemePropriete = "Ma troisième propriété";

    // Methodes / Actions
    public function maPremiereMethode() {}
    public function maSecondeMethode(string $argument_1, int $argument_2) 
    {
        echo $argument_1 ." - ". $argument_2;
        echo "<br>";
        echo "{$argument_1} - {$argument_2}";
    }
    public function maTroisiemeMethode()
    {
        return "Valeur de la troisieme methode";
    }
}