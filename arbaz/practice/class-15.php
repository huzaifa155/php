<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Session 15</title>
</head>
<body>
    
    <h3>IF-ELSEIF-ELSE STATEMENT</h3>
    <?php
        // define variable 
        $percent_age = "9%";
        // lets code 
        if($percent_age <= "40%")
        {
            echo "Fail";
        }
        elseif($percent_age <= "50%")
        {
            echo "D-Grade";
        }
        elseif($percent_age <= "60%")
        {
            echo "C-Grade";
        }
        elseif($percent_age <= "70%")
        {
            echo "B-Grade";
        }
        elseif($percent_age <= "90%")
        {
            echo "A-Grade";
        }
        elseif($percent_age <= "100%")
        {
            echo "A+ Grade";
        }else{
            echo "Invalid Percentage";
        }
    ?>



</body>
</html>