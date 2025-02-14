<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
    $lapsi="3.php";
    if(file_exists($lapsi)){
        $libri=fopen($lapsi, "r") or die("GABIM: Fajlli nuk mund te hapet. ");
        $tabela=fread($libri,filesize($file));
        fclose($libri);
        echo $tabela;
    }else{
        echo "GABIM: Fajlli nuk ekziston.";
    }
    ?>
</body>
</html>