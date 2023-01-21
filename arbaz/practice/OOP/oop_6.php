<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || ITERATORS</title>
</head>
<body>
    <?php
    // create iterator
    class TestIterator implements Iterator{
        private $unknown = [];
        private $op = 0;

        function __constructor($unknown){
            $this->$unknown = array_values($unknown);
        }
        // current method
        public function current(){
            return $this->unknown[$this->op];
        }
        // key method
        public function key(){
            return $this->op;
        }
        // next method
        public function next(){
            $this->op++;
        }
        // rewind method
        public function rewind(){
            $this->op = 0;
        }
    }
    // yeah topic drop krwa diya hai
    ?>
</body>
</html>