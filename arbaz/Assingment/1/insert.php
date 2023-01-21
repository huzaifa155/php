<?php
    include('date&time.php');
    include('configration.php');
    if(isset($_POST['submit'])){
        $type = $_POST['pizza_type'];
        $size = $_POST['pizza_size'];
        $quality = $_POST['pizza_quantity'];
        $price = $_POST['pizza_price'];
        $insert = "INSERT INTO `pizza`(`pizza_key`, `pizza_size`, `pizza_quantity`, `pizza_price`) VALUES ('$type','$size','$quality','$price')";
        $result = $connect -> query($insert);
        if($result == true){
            echo '  <div class="alert alert-warning" role="alert">
                        Your Data is succesfully add!
                    </div>';
        }else{
            echo '  <div class="alert alert-danger" role="alert">
                        Failed to Insert Data!
                    </div>';
        }
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
        .wrapper{
            border-top : 03px solid #D49B17;
            border-bottom : 02px solid #D49B17;
        }
        form{
            padding: 20px;
        }
        .btn-edit:hover{
            background-color : #D49B17;
        }
        .btn-edit{
            border : 1px solid #D49B17;
        }
        .alert{
            position: fixed;
            top: 115px;
            left: 0;
            right: 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Pizza Record ADD, DELETE OR CHECK LIST OF DATA</h1>
    </header>
    <center>
        <section class="pizza">
            <div class="container">
                    <div class="col-lg-5 bg-light rounded-top wrapper">
                        <h3 class="text-center pt-3">ADD YOUR CHOOSEN PIZZA HERE</h3>
                        <p class="text-center text-muted lead">Enter Your Favourite One Pizza</p>
                        <form action="insert.php" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Pizza-Type</span>
                            <input type="text" class="form-control" name="pizza_type" placeholder="Name">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Pizza-Size</span>
                            <input type="text" class="form-control" name="pizza_size" placeholder="Size">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Pizza_Quantity</span>
                            <input type="text" class="form-control" name="pizza_quantity" placeholder="quantity">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Pizza-Price</span>
                            <input type="text" class="form-control" name="pizza_price" placeholder="Price">
                        </div>
                        <div class="d-grid">
                            <input type="submit" name="submit" class="btn btn-edit" value="Submit">
                        </div>
                        </form>
                    </div>
            </div>
        </section>
    </center>
    <footer>@ Muhammad Arbaz Hussain, <span><?php echo $dat; ?></span>,  <span><?php echo $time_date; ?></span> (Pakistan Standarad Date and Time)</footer>
    <!-- Bootatrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>