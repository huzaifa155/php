<?php
    include('date&time.php');
    include('configration.php');
    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        $delete = "DELETE FROM `pizza` WHERE id=$id";
        $deleted = $connect -> query($delete);
        if(!$deleted){
            die("Couldn't delete Data" . mysql_error());
        }else{
            echo '  <div class="alert alert-warning" role="alert">
                        Your Data is succesfully add!
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
                        <h3 class="text-center pt-3">DELETE YOUR RECORD</h3>
                        <p class="text-center text-muted lead">Enter Your Pizza List ID</p>
                        <form action="delete.php" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text">#ID</span>
                            <input type="text" class="form-control" name="id" placeholder="Enter ID">
                        </div>
                        <div class="d-grid">
                            <input type="submit" name="delete" class="btn btn-edit" value="DELETE">
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