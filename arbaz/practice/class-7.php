<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Session 7</title>
</head>
<body>

    <h3>String Replace</h3>
    <?php
        $pharse = "Hi, I am Muhammad Arbaz";
        // str_replace(find,replace,string,count)
        echo(str_replace("Arbaz","Shahbaz",$pharse)."</br>");
    ?>
    <h3>Length String</h3>
    <?php
        echo("The Lengthb of the pharse is : " . strlen($pharse));
    ?>
    <h3>Word Count</h3>
    <?php
        echo("There are " . str_word_count($pharse) ." word in the string");
    ?>
    <h3>String Reverse</h3>
    <?php
        echo("The reverse of the string is : " . strrev($pharse));
    ?>
    <h3>Word Uppercase</h3>
    <?php
        echo("String starting word uppercase " . ucwords($pharse));
    ?>
    <h3>Uppercase all words</h3>
    <?php
        echo("For uppercase " . strtoupper($pharse));
    ?>
    <h3>Lowercase all words</h3>
    <?php
        echo("For lowercase " . strtolower($pharse));
    ?>
    
</body>
</html>