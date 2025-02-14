<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
$lapsi="2.php";
if(file_exists($lapsi)){
    echo "The file $file exists." . "<br>";
    $libri=fopen($lapsi, "r") or die("GABIM: Fajlli nuk ekziston.");
    if($libri){
        echo "Fajlli u hap me sukses.";
        fclose($libri);
    }
}else{
    echo "GABIM: Fajlli $file nuk ekziston.";
}
    ?>
</body>
</html>