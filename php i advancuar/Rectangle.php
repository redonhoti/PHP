<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Rectangle
    {
        public $length=0;
        public $width=0;
        public function getPerimeter(){
            return (2 * ($this->length + $this->width));
        }
        public function getArea(){
            return ($this->length * $this->width);
        }
    }
    ?>
</body>
</html>