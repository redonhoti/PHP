<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
class Shembull {
    public $publike="E qasshme kudo";
    protected $mbrojtur="E qasshme brenda klases dhe nenklasave";
    private $private="E qasshme vetem brenda kesaj klase";

    public function shfaqPublike(){
        return $this->publike;
    }
    protected function shfaqMbrojtur(){
        return $this->mbrojtur;
    }
    protected function shfaqPrivate(){
        return $this->private;
    }
    public function shfaqGjithcka(){
        echo "Publike:" . $this->shfaqPublike() . "\n";
        echo "Mbrojtur:" . $this->shfaqMbrojtur() . "\n";
        echo "Private:" . $this->shfaqPrivate() . "\n";
    }
}
$objekt=new Shembull();

echo $objekt->publike . "\n";
echo $objekt->shfaqPublike() . "\n";

$objekt->shfaqGjithcka();
    ?>
</body>
</html>