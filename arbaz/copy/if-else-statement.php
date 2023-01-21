<?php
    $houroftheday = date("H");
    if($houroftheday < "18"){
        echo "Have a nice day ahead";
    }
    else{
        echo "Good Night";
    }
?>