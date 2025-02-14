<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
class Karakteri
{
    private $emri;
    private $shendeti;
    private $forca;
    private $aftesite;
public function __construct($emri, $shendeti=100,$forca=10)
{
    $this->emri=$emri;
    $this->shendeti=$shendeti;
    $this->forca=$forca;
    $this->aftesite=[];
}
public function getEmri()
{
    return $this->emri;
}
public function getShendeti()
{
    return $this->shendeti;
}
public function getForca()
{
    return $this->forca;
}
public function shtoAftesi($aftesi)
{
    if(preg_match('/^[a-zA-ZëËçÇ]+$/',$aftesi)){
        $this->aftesite[]=$aftesi;
        echo "Aftesia '$aftesi' u shtua me sukses!\n";
    }else {
        echo "Aftesia '$aftesi' nuk eshte e vlefshme! Vetem shkronja dhe hapesira lejohen.\n";
    }
}
public function getAftesite()
{
    return $this->aftesite;
}
public function sulmo(Karakteri $kundershtari)
{
    echo "$this->emri sulmon {$kundershtari->getEmri()} me force $this->forca!\n";
    $kundershtari->peshoDem($this->forca);
}
public function peshoDem($dem)
{
    $this->shendeti -=$dem;
    if($this->shendeti <=0){
        $this->shendeti=0;
        echo "$this->emri eshte mundur!\n";
    }else{
        echo "$this->emri ka tani $this->shendeti shendet te mbetur.\n";
    }
}
}
$luftetar1=new Karakteri("Aragorn", 120,15);
$luftetar2=new Karakteri("Legolas", 100,12);

$luftetar1->shtoAftesi("Goditje e fuqishme");
$luftetar2->shtoAftesi("Goditje_123");
$luftetar1->shtoAftesi("Shigjete e shpejte");
$luftetar2->shtoAftesi("Sulm i fshehte");
$luftetar1->sulmo($luftetar2);
$luftetar2->sulmo($luftetar1);

    ?>
</body>
</html>