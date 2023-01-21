<?php
    include('date&time.php');
    include('configration.php');
    $truncate = "TRUNCATE TABLE `pizza`";
    $TRUNCATE = $connect -> query($truncate);
    if($TRUNCATE){
        echo '  <div class="alert alert-warning" role="alert">
                        Your Data is succesfully Delete!
                    </div>';
    }else{
        echo '  <div class="alert alert-danger" role="alert">
                    Failed to Delete Data!
                </div>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || Pizza Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .pizza i{
            position: fixed;
            top: 250px;
            left: -650px;
            right: 0;
            font-size: 2em;
            color: #D49B17;
            cursor: pointer;
        }
        .alert{
            position: fixed;
            top: 115px;
            left: 0;
            right: 0;
        }
    </style>
    <!-- ICON -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <header>
        <h1>Pizza Record ADD, DELETE OR CHECK LIST OF DATA</h1>
    </header>
    <section class="pizza">
    <div><a href="index.php"><i class="uil uil-left-arrow-to-left"></i></a></div>
    </section>
    <footer>@ Muhammad Arbaz Hussain, <span><?php echo $dat; ?></span>,  <span><?php echo $time_date; ?></span> (Pakistan Standarad Date and Time)</footer>
    <!-- Bootatrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>