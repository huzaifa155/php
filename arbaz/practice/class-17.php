<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Sessiojn 17</title>
</head>
<body>
    
    <?php
        // define variable 
        $lang = "python";
        // switch statement start
        switch($lang)
        {
            case "C":
                echo "Your Favourite language is C";
                break;
            case "java":
                echo "Your Favourite language is java";
                break;
            case "python":
                echo "Your Favourite language is python";
                break;
            case "php":
                echo "Your Favourite language is php";
                break;
            case "perl":
                echo "Your Favourite language is perl";
                break;
            default:
            echo "Your Favourite Language are not include in our website";
        }
    ?>

</body>
</html>