<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Session 12</title>
</head>
<body>

    <h1>Parameterized Function</h1>
    <h3>Addition</h3>
    <?php
        function add($num1, $num2)
        {
            $result = $num1 + $num2;
            return $result;
        }

        echo("The answer to your addition is : " .add(23, 56));
    ?>
    <h3>Substraction</h3>
    <?php
        function sub($num1, $num2)
        {
            $result = $num1 - $num2;
            return $result;
        }

        echo("The answer to your substraction is : " .sub(23, 5));
    ?>
    <h3>Multiplication</h3>
    <?php
        function mul($num1, $num2)
        {
            $result = $num1 * $num2;
            return $result;
        }

        echo("The answer to your multiplication is : " .mul(23, 56));
    ?>
    <h3>Division</h3>
    <?php
        function divi($num1, $num2)
        {
            $result = $num1 + $num2;
            return $result;
        }

        echo("The answer to your division is : " .divi(25, 5));
    ?>
    
</body>
</html>