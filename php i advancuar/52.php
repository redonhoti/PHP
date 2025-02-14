<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
require "Rectangle.php";

class Square extends Rectangle
{
    public function isSquare(){
        if($this->length == $this->width){
            return true;
        }else{
            return false;
        }
    }
}
$obj=new Square;
$obj->length=20;
$obj->width=20;
if($obj->isSquare()){
    echo "Siperfaqja e sheshit eshte ";
}else{
    echo "Siperfaqja e drejtkendeshit eshte";
};
echo $obj->getArea();

    ?>
</body>
</html>