<?php 

// Adresse du fichier de cache
$file = str_replace(dirname(__FILE__), "", __FILE__);
$file = str_replace(".php", "", $file);
$cache_file = "../cache$file.html";


$expire = time() -30 ; // valable une minute
$tse_start = microtime(true);



if ( !file_exists($cache_file) || filemtime($cache_file) < $expire)
{
    // 1. ouverture du tampon
    ob_start(); 

    sleep(3);

    // 2. Rendu à mettre en cache
    echo 'Contenu de la page en cache';
    echo '<br>';
    echo date('Y-m-d H:i:s');
    
    // 3. stockage du tampon dans une chaîne de caractères
    $cache = ob_get_contents(); 
    file_put_contents($cache_file, $cache) ; 

    // 4. fermeture de la tamporisation de sortie et effacement du tampon
    ob_end_clean();
}


// 5. lire le fichier de cache
readfile($cache_file);




$tse_end = microtime(true);

echo "<br><br>";
echo $tse_end - $tse_start;