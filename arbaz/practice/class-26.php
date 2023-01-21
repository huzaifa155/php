<h3>Multi-Dimension Array</h3>
<?php
    $contact = array(
        array(
            "Name" => "Huzaifa",
            "Email" => "huzaifa@gmail.com",
            "Number" => "638393637376345652345346342547468347236"
        ),
        array(
            "Name" => "Ali Raza",
            "Email" => "raza@gmail.com",
            "Number" => "823687268955164376435347843875"
        ),
        array(
            "Name" => "Arbaz",
            "Email" => "arbaz@gmail.com",
            "Number" => "74874753534523w5"
        ),
    );

    echo("Huzaifa Email is : " . $contact[0]['Email'] . "<br/>");
    echo("Ali Raza contact Number is : " . $contact[1]['Number'] . "<br/>");
    echo("Arbaz Email is : " . $contact[2]['Email'] . "<br/>");
?>