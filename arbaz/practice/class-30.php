<!DOCTYPE html>
<?php
$name = "user";
$value = "arbaz";
setcookie($name, $value, time() + (86400 * 30), "/"); // 86400seconds = 1day
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Cookies</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$name])){
            echo "Cookie named '" . $name . " ' is not set!";
        }else{
            echo "Cookie '" . $name ."' is set <br/>";
            echo "Value is : " . $_COOKIE[$name];
        }
    ?>
</body>
</html>