<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 

    $lapsi="2.php";
    if(file_exists($lapsi)){
        $libri=fopen($lapsi, "r") or die("GABIM: Fajlli nuk mund te hapet..");
        if($libri){
            echo "Fajlli u hap me sukses." . "<br>";
        }
        echo "Tani mbyllet fajlli." . "<br>";
        if(fclose($libri)){
            echo "Fajlli u mbyll me sukses.";
        }
    }else{
        echo "GABIM: Fajlli nuk ekziston.";
    }
        ?>

</body>
</html>