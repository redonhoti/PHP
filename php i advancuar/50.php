<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
class MyClass
{
    public function __construct(){
        echo 'Klasa"' . __CLASS__ . '"filloi!<br>';
    }
    public function __destruct(){
        echo 'Klasa"' . __CLASS__ . '"u shkaterrua.<br>';
    }
}
$obj=new MyClass;
echo "Eshte arritur fundi i dosjes."

    ?>
</body>
</html>