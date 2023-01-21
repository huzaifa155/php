<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Destroy</title>
</head>
<body>
    <?php
        // Session_unset will remove all session variables
        session_unset();
        // Session_unset will terminate the session
        session_destroy();

        echo("The username of the variable is :" . $_SESSION['username']);
    
    ?>
</body>
</html>