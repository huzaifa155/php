<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Session 14</title>
</head>
<body>

    <h3>IF-STATEMENT</h3>
    <?php
        // decleared variable
        $timeoftheday = date("H");
        // use if condition
        if($timeoftheday < 12)
        {
            echo "Good Morning";
        }        
    ?>

    <h3>IF-ELSE-STATEMENT</h3>
    <?php
        // decleared variable
        $timeoftheday = date("H");
        // use if-else condition
        if($timeoftheday < 12)
        {
            echo "Good Morning";
        }else{
            echo "Evening Time";
        }        
    ?>
    
</body>
</html>