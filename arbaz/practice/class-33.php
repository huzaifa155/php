<?php
    session_start();
?>
<h2>The Value of the Variables are there</h2>
<?php
    echo("The username of the variable is :" . $_SESSION['username']);
?>