<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || ITERABLES</title>
</head>
<body>
    <?php
    function displayIterable(iterable $iterable){
        foreach($iterable as $value){
            echo $value . "<br/>";
        }
    }
    $arr = ['Muhammad Shahbaz', 'Muhammad Huzaifa', 'Ali Raza', 'Muhammad Arbaz'];
    displayIterable($arr);
    ?>
</body>
</html>