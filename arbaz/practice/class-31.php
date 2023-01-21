<?php
    echo("Value of the cookie is : " . $_COOKIE['user']);

    $name = "user";
    $value = "raza";
    setcookie($name, $value, time() - (86400 * 30), "/"); // 86400seconds = 1day
?>