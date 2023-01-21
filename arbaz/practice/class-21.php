<h3>FOR-EACH LOOP</h3>
<?php
    $flower = array(
        "Rose" => "10",
        "lily" => "20",
        "lotus" => "30",
        "jasmine" => "40"
    );
    foreach($flower as $f => $value)
    {
        echo("$f = $value <br/>");
    }
?>