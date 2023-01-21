<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Session 11</title>
</head>
<body>
    
    <h3>Addition</h3>
    <?php
        function add()
        {
            $num1 = 16;
            $num2 = 96;
            $result = $num1 + $num2;
            return $result;
        }

        echo("The answer to your addition is : " .add());
    ?>
    <h3>Subtraction</h3>
    <?php
        function sub()
        {
            $num1 = 16;
            $num2 = 6;
            $result = $num1 - $num2;
            return $result;
        }

        echo("The answer to your subtraction is : " .sub());
    ?>
    <h3>Multiplication</h3>
    <?php
        function mul()
        {
            $num1 = 16;
            $num2 = 3;
            $result = $num1 * $num2;
            return $result;
        }

        echo("The answer to your multiplication is : " .mul());
    ?>
    <h3>Division</h3>
    <?php
        function divi()
        {
            $num1 = 16;
            $num2 = 4;
            $result = $num1 / $num2;
            return $result;
        }

        echo("The answer to your division is : " .divi());
    ?>

</body>
</html>