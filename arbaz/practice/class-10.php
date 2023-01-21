<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Session 10</title>
</head>
<body>
    <h3>Static Variable</h3>
    <?php
        function static_variable()
        {
            static $x = 10; // static variable
            $y = 20; // non-static variable

            $x++; // increment in static variable

            $y++; // increment in non-static variable

            echo "Static : " . $x . "<br/>";
            echo "Non-Static : " . $y . "<br/>";
        }

        // first function call
        static_variable();

        // second function call
        static_variable();

        // third function call
        static_variable();
    ?>
    
</body>
</html>