<?php
    namespace PHP;
    trait T1{
        public function msg1(){
            echo("This message is coming from trait T1");
        }
    }
    class Message{
        use T1;
    }
    $myMessage = new Message();
    echo($myMessage->msg1());
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || NAMESPACES</title>
</head>
<body>
    
</body>
</html>