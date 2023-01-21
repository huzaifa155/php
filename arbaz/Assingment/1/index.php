<?php
    include('date&time.php');
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
            top: 200px;
            left: 400px;
            right: 0;
            font-size: 2em;
            color: #D49B17;
        }
        .pizza .list_items{
            padding: 10px;
            margin-left: -150px;
        }
        .pizza .pizza-content h2{
            font-size: 2.5em;
            font-weight: 500;
            padding-right: 20px;
        }
        .pizza .list_items li a{
            text-decoration: none !important;
            font-size: 1.2em;
        }
        .pizza .pizza-content img{
            height: 120px;
            margin-top: -35px;
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
        <div class="pizza-content">
            <h2>Your Pizza Main Menu</h2>
            <img src="images/images-removebg-preview.png" alt="pizza_slice">
        </div>
        <div class="list_items">
            <li><a href="insert.php">Add Cart</a></li>
            <li><a href="delete.php">Delete Cart</a></li>
            <li><a href="search.php">Search Any one Cart</a></li>
            <li><a href="delete_all.php">Erase All Cart</a></li>
            <li><a href="list_data.php">List of Add Cart</a></li>
        </div>
    </section>
    <footer>@ Muhammad Arbaz Hussain, <span><?php echo $dat; ?></span>,  <span><?php echo $time_date; ?></span> (Pakistan Standarad Date and Time)</footer>
    <!-- Bootatrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>