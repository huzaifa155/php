<h3>Break Statement</h3>
<?php
    for($num = 5; $num < 25; $num++)
    {
        if($num == 18)
        {
            break;
        }
        echo $num . "<br/>";
    }
?>

<h3>Continue Statement</h3>
<?php
    for($num = 5; $num < 25; $num++)
    {
        if($num == 18)
        {
            continue;
        }
        echo $num . "<br/>";
    }
?>