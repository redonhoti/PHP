<html lang="en">
<head>
 
    <title>Document</title>
</head>
<body>
    <?php 
    $file="5.php";
    if(file_exists($file)){
        $arr=file($file) or die("GABIM: Fajlli nuk mund te hapet.");
        foreach($arr as $line){
            echo $line;
        }
    }else{
        echo  "GABIM: Fajlli nuk ekziston";

    }
    ?>
</body>
</html>