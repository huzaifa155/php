<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Session 8</title>
</head>
<body>
    
    <?php
        $x = 1.9e411;
        var_dump($x);
        echo"<br/>"; 
    ?>
    <?php
        $y = 555.88;
        var_dump($y);
        echo"<br/>"; 
    ?>
    <?php
        $z = 555.88;
        var_dump(is_numeric($z));
        echo"<br/>";  
    ?>
    <?php
        $a = "HELLO";
        var_dump($a);
        echo"<br/>"; 
    ?>
    <?php
       echo(pi()."<br/>");
       echo(min(0, 150, 30, 20, -8, -200)."<br/>");
       echo(max(0, 150, 30, 20, -8, -200)."<br/>");
       echo(sqrt(64)."<br/>");
       echo(abs(-6.7)."<br/>");
       echo(round(0.47)."<br/>");
       echo(round(0.71)."<br/>");
       echo(rand()."<br/>");
       echo(rand(10, 100)."<br/>");
    ?>

</body>
</html>