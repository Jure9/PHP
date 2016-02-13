<?php

$word=$_POST["test"];

if(isPalin($word))
    
    echo "Beseda je palindrom.";
    
else
    
    echo "Beseda ni palindrom";


function isPalin($woord)
{
    if($woord === strrev($woord))
        return true;
    
    else 
        return false;
}

?>
