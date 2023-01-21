<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Session 9</title>
</head>
<body>

    <h3>Local variable</h3>
    <?php
        function Test()
        {
            $x = 5;
            echo "Following line shows an error since variable x is decleared outside the function";
            echo "<p>Variable x inside the function is : $x <p/>";
        }
        Test();

        echo "<p>Variable x outside the function is : $x error<p/>"
    ?>

    <h3>Global variable</h3>
    <?php
        $x = 5;
        function Test2()
        {
            echo "Following line shows an error since variable x is decleared outside the function";
            echo "<p>Variable x inside the function is : $x error<p/>";
        }
        Test2();

        echo "<p>Variable x outside the function is : $x <p/>"
    ?>
    
</body>
</html>