<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Session 6</title>
</head>
<body>
    
    <?php
        echo ("Index Array");
        $cars = array("rolls royce","hilux","BMW");
        echo("<pre>");
        var_dump($cars);
        echo("<pre/>");

        echo ("Associate Array");
        $age = array("peter"=>"35","Ben"=>"20","Joe"=>"43");
        echo("<pre>");
        var_dump($age);
        echo("<pre/>");

        echo ("Multi-Dimension Array");
        $cars_2 = array(
            array("Volvo",22,30),
            array("BMW",25,13),
            array("GTX-R",12,60),
            array("Hilux",42,50),
        );
        echo("<pre>");
        var_dump($cars_2);
        echo("<pre/>");
    ?>
</body>
</html>