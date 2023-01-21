<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbconfirm = 'pizza_project_ass';

    $connect = mysqli_connect($server, $username, $password, $dbconfirm);
    if(!$connect){
        die("Your Database is not Here". mysqli_connect_error());
    }else{
        return $connect;
    }
?>