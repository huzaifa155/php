<?php
    if(isset($_POST['ass'])){
        $num_1 = $_POST['num1'];
        $num_2 = $_POST['num2'];
        $num_3 = $_POST['num3'];
        $ass_operands = $_POST['ass'];
        $res_1 = '';
        $res_2 = '';
        if(is_numeric($num_1) && is_numeric($num_2) ||  is_numeric($num_3)){
            switch ($ass_operands){
                case "ADDITION" :
                    $res_1 = $num_1 + $num_2;
                    break;
                case "SUBTRACTION" :
                    $res_1 = $num_1 - $num_2;
                    break;
                case "MULTIPLICATION" :
                    $res_1 = $num_1 * $num_2;
                    break;
                case "DIVISION" :
                    $res_1 = $num_1 / $num_2;
                    break;
                case "Power" :
                    $res_1 = pow($num_1, $num_2);
                    break;
                case "ABSOLUTE":
                    $res_2 = abs($num_3);
                    break;
                case "SQURE-ROOT":
                    $res_2 = sqrt($num_3);
                    break;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Calculator</title>
    <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">

    <div class="container">
        <!-- Double Input -->
        <div class="row mt-5 bg-white">
            <div class="col-lg-5 col-md-10">
                <h3 class="text-center">Calculator For Double Field</h3>
                <form action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="input-group mb-3 mt-3">
                        <input type="number" name="num1" class="form-control">
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <input type="number" name="num2" class="form-control">
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" name="ass" class="btn btn-outline-info mr-2 mb-2" value="ADDITION">
                        <input type="submit" name="ass" class="btn btn-outline-info mr-2 mb-2" value="SUBTRACTION">
                        <input type="submit" name="ass" class="btn btn-outline-info mr-2 mb-2" value="MULTIPLICATION">
                        <input type="submit" name="ass" class="btn btn-outline-info mr-2 mb-2" value="DIVISION">
                        <input type="submit" name="ass" class="btn btn-outline-info mr-2 mb-2" value="Power">
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <input readonly type="text" class="form-control" value="<?php echo($res_1);?>">
                    </div>
            </div>
        </div>
        <!-- Single Input -->
        <div class="row mt-5 bg-white">
            <div class="col-lg-5 col-md-10">
                <h3 class="text-center">Calculator For Single Field</h3>
                    <div class="input-group mb-3 mt-3">
                        <input type="text" name="num3" class="form-control">
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" name="ass" class="btn btn-outline-info mr-2 mb-2" value="SQURE-ROOT">
                        <input type="submit" name="ass" class="btn btn-outline-info mr-2 mb-2" value="ABSOLUTE">
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <input readonly type="text" class="form-control" value="<?php echo($res_2);?>">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>