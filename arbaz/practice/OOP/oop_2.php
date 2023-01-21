<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || OOP DESTRUCTOR</title>
</head>
<body>
    <?php
    class Example{
        public $name;
        public $color;

        function __construct($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function __destruct(){
            echo("This value stored in the OOP is :" . $this->get_name());
        }
    }

    $unknown = new Example("unknown");
    
    
    ?>
</body>
</html>