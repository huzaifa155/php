<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $uname = sanitize_data($_POST['username']);
        $pwd = sanitize_data($_POST['password']);
        $company = sanitize_data($_POST['company']);
        $comment = sanitize_data($_POST['comment']);
        $gender = sanitize_data($_POST['gender']);

        echo '<div class="alert alert-info" role="alert">
                Your Data is Sanitize
              </div>';
    }
    function sanitize_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Session 27</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-4">
                <h1 class="text-center">Form Validation</h1>
                <!-- Form Start -->
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                    <div class="form-group">
                      <label for="username">Name :</label>
                      <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="password">Password :</label>
                      <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="company">Company :</label>
                      <input type="text" name="company" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="comment">Comment :</label>
                      <textarea class="form-control" name="comment" placeholder="Leave a comment here"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="#">Gender :</label>
                      <input class="form-check-input" type="radio" name="gender" value="male">
                            Male
                      <input class="form-check-input" type="radio" name="gender" value="female">
                            Female
                      <input class="form-check-input" type="radio" name="gender" value="other">
                            Other
                    </div>
                        <br/>
                        <input type="submit" name="submit" class="btn btn-outline-info" value="Submit">
                </form>
                <!-- Form End -->
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>