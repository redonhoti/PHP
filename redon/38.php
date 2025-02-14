<html lang="en">
<head>
    <title>Deklarata switch-case PHP</title>
</head>
<body>
<?php
$today = date("D");
switch($today){
    case "E hënë":
        echo "Sot është e hënë. Pastroni shtëpinë tuaj.";
        break;
    case "E martë":
        echo "Sot është e martë. Bli pak ushqim.";
        break;
    case "E mërkurë":
        echo "Sot është e mërkurë. Vizitoni një mjek.";
        break;
    case "E enjte":
        echo "Sot është e enjte. Riparoni makinën tuaj.";
        break;
    case "E premte":
        echo "Sot është e premte. Festo sante.";
        break;
    case "E shtunë":
        echo "Sot është e shtunë. Është koha e filmit.";
        break;
    case "E diele":
        echo "Sot është e diel. Pushoni pak.";
        break;
    default:
        echo "Nuk ka informacion për atë ditë.";
        break;
}
?>

</body>
</html>
