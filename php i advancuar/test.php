<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

require "Rectangle.php";

$obj = new Rectangle;
echo $obj->length;
echo $obj->width;
$obj->length=30;
$obj->width=20;
echo $obj->length;
echo $obj->width;
echo $obj->getPerimeter();
echo $obj->getArea();

?>
</body>
</html>