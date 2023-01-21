<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Session 13</title>
</head>
<body>
    <h1>Global Keyword</h1>
    <h3>Addition</h3>
    <?php
        $x = 25;
        $y = 10;
        function myTestadd()
        {
            global $x, $y;
            $y = $x + $y;
        }
        myTestadd(); // run the function
        echo $y; // display updated value for variable $y
    ?>
    <h3>Substraction</h3>
    <?php
        $x = 25;
        $y = 10;
        function myTestsub()
        {
            global $x, $y;
            $y = $x - $y;
        }
        myTestsub(); // run the function
        echo $y; // display updated value for variable $y
    ?>
    <h3>Multiplication</h3>
    <?php
        $x = 25;
        $y = 10;
        function myTestmul()
        {
            global $x, $y;
            $y = $x * $y;
        }
        myTestmul(); // run the function
        echo $y; // display updated value for variable $y
    ?>
    <h3>Division</h3>
    <?php
        $x = 25;
        $y = 10;
        function myTestdivi()
        {
            global $x, $y;
            $y = $x / $y;
        }
        myTestdivi(); // run the function
        echo $y; // display updated value for variable $y
    ?>

</body>
</html>