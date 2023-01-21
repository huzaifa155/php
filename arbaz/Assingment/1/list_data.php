<?php
    include('date&time.php');
    include('configration.php');
    $fetch = "SELECT * FROM `pizza`";
    $select = $connect -> query($fetch);
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
        .pizza{
            position: fixed;
            top: 150px;
            left: 100px;
            right: 0;
            min-height: auto;
        }
    </style>
</head>
<body>

    <header>
        <h1>Pizza Record ADD, DELETE OR CHECK LIST OF DATA</h1>
    </header>
    <section class="pizza">
        <div class="container">
            <div class="col-lg-10 bd-light rounded-top wrapper">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Pizza_Type</th>
                            <th scope="col">Pizza_Size</th>
                            <th scope="col">Pizza_Quantity</th>
                            <th scope="col">Pizza_Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($select -> num_rows > 0){
                                while($row = $select -> fetch_assoc()){
                                    ?>
                                    <tr>
                                        <td scope="row"><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['pizza_key']; ?></td>
                                        <td><?php echo $row['pizza_size']; ?></td>
                                        <td><?php echo $row['pizza_quantity']; ?></td>
                                        <td><?php echo $row['pizza_price']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <footer>@ Muhammad Arbaz Hussain, <span><?php echo $dat; ?></span>,  <span><?php echo $time_date; ?></span> (Pakistan Standarad Date and Time)</footer>
    <!-- Bootatrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>