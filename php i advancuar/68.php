<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    public function __construct($emri,$shendeti=100,$forca=10)
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
    public function shtoAftesiteNgaTeksti($teksti)
    {
        preg_match_all('/[a-zA-ZëËçÇ]+/',$teksti,$pershtatje);
        $shtuar=0;
        foreach ($pershtatje[0] as $aftesi){
            if(!in_array($aftesi,$this->aftesite)){
                $this->aftesite[]=$aftesi;
                $shtuar++;
                echo "Aftesia '$aftesi' u shtua me sukses!\n";
            }
        }
        if($shtuar === 0){
            echo "Asnje aftesi e vlefshme nuk u shtua nga teksti!\n";
        }
    }
    public function getAftesite()
    {
        return $this->aftesite;
    }
    public function sulmo(Karakteri $kundershtari)
    {
        echo "$this->emri sulmon {$kundershtari->getEmri()}me force $this->forca!\n";
        $kundershtari->peshoDem($this->forca);
    }
    public function peshoDem($dem)
    {
        $this->shendeti -=$dem;
        if($this->shendeti <= 0){
            $this->shendeti = 0;
            echo "$this->emri eshte mundur!\n";
        }else {
            echo "$this->emri ka tani $this->shendeti shendet te mbetur.\n";
        }
    }
}
$luftetar1=new Karakteri("Aragorn",120,15);
$luftetar2=new Karakteri("Legolas",100,12);

$tekstAftesi="Goditje e fuqishme,Sulm i shpejte,Sulm i fshehte 123";
$luftetar1->shtoAftesiteNgaTeksti($tekstAftesi);
$luftetar1->sulmo($luftetar2);
$luftetar2->sulmo($luftetar1);
    ?>
</body>
</html>