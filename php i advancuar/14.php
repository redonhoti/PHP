<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
    $libri="100.php";
    if(file_exists($libri)){
        $lapsi=fopen($libri, "r") or die("GABIM: Fajlli nuk mund te hapet.");
        $tabela=fread($lapsi,20);
        fclose($lapsi);
        echo $tabela;
    }else{
        echo "GABIM: Fajlli nuk ekziston.";
    }
    ?>
</body>
</html>