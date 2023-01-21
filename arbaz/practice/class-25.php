<h3>Associative Array</h3>
<?php

    $age = array(
        "huzaifa" => "18",
        "raza" => "19",
        "arbaz" => "17",
    );
    echo ("The age of Huzaifa is : ". $age['huzaifa']. "<br/>");
    echo ("The age of Ali Raza is : ". $age['raza']. "<br/>");
    echo ("The age of Arbaz is : ". $age['arbaz']. "<br/>");

    $age['huzaifa'] = "Adult";
    $age['arbaz'] = "Adult";
    $age['raza'] = "Adult";

?>