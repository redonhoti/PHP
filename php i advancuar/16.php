<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
    $file="3.php";
    if(file_exists($file)){
        $content=file_get_contents($file) or die("GABIM: Fajlli nuk mund te hapet.");
        echo $content;
    }else{
        echo "GABIM: Fajlli nuk ekziston";
    }
    ?>
</body>
</html>