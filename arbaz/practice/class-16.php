<!doctype html>
<html lang="en">
  <head>
    <title>PHP | Session 16</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizzing: border-box;
        }
        body
        {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }
    </style>
  </head>
  <body>
      
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Enter Your Percentage</label>
                <br/>
                <input type="text" class="form-control" name="percentage">
                <br/>
                <input type="submit" name="submit" class="btn btn-outline-info" value="Submit">
            </div>
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $percent_age = $_POST['percentage'];
        // logic start
        // lets code 
        if($percent_age <= 40)
        {
            echo "Fail";
        }
        elseif($percent_age <= 50)
        {
            echo "D-Grade";
        }
        elseif($percent_age <= 60)
        {
            echo "C-Grade";
        }
        elseif($percent_age <= 70)
        {
            echo "B-Grade";
        }
        elseif($percent_age <= 90)
        {
            echo "A-Grade";
        }
        elseif($percent_age <= 100)
        {
            echo "A+ Grade";
        }else{
            echo "Invalid Percentage";
        }
    }
?>