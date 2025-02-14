<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class ShembullStatik {
    public static $numerues=0;

    public static function rritNumeruesin(){
        self::$numerues++;
    }
    public static function merrNumeruesin(){
        return self::$numerues;
    }
}
echo "Numeruesi fillestar: " . ShembullStatik::merrNumeruesin() . "\n";

ShembullStatik::rritNumeruesin();
ShembullStatik::rritNumeruesin();

echo "Numeruesi pas rritjes:" . ShembullStatik::merrNumeruesin() . "\n";

$objekt1=new ShembullStatik();
$objekt2=new ShembullStatik();

echo "Numeruesi nga objekti1: " . $objekt1::merrNumeruesin() . "\n";

echo "Numeruesi nga objekti2: " . $objekt2::merrNumeruesin() . "\n";
    ?>
</body>
</html>