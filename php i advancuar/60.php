<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
class Libri
{
    public function Metodaime(){
        echo __METHOD__;
    }
}
$obj = new Libri();
$obj->Metodaime();
    ?>
</body>
</html>