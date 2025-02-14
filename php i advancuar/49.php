<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

require "Rectangle.php";

$obj1 = new Rectangle;
$obj2 = new Rectangle;
echo $obj1->getArea();
echo $obj2->getArea();
$obj1->length=30;
$obj2->width=20;
$obj2->length=35;
$obj2->width=50;
echo $obj1->getArea();
echo $obj2->getArea();

?>
</body>
</html>