<h3>Fibonacci series</h3>
<?php
    $num = 0;
    $num1 = 0;
    $num2 = 1;
    while($num < 10)
    {
        $num3 = $num2 + $num1;
        echo $num3."<br/>" ;
        $num1 = $num2;
        $num2 = $num3;
        $num = $num + 1;
    }
?>