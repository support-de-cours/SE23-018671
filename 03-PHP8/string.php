<?php 

$str = "WordPress";

if ( preg_match("/^Word/", $str) )
{
    echo "Commence par Word (regex)<br>";
}
if ( preg_match("/Press$/", $str) )
{
    echo "Se termine par Press (regex)<br>";
}

if ( preg_match("/pr/i", $str) )
{
    echo "contien \"pr\"<br>";
}



if ( str_starts_with($str, "Word") )
{
    echo "Commence par Word (php8)<br>";
}
if ( str_ends_with($str, "Press") )
{
    echo "Se termine par Press (php8)<br>";
}
if (str_contains($str, "pre"))
{
    echo "contien \"rd\"<br>";
}