<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Klasaime
{
    public function getClassName(){
        return __CLASS__;
    }
}
$obj = new Klasaime();
echo $obj->getClassName();
    ?>
</body>
</html>