<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$pattern="/^J/";
$names=array("Jhon Carter","Clark Kent","John Rambo");
$matches=preg_grep($pattern, $names);
foreach($matches as $match){
echo $match . "<br>";
}
    ?>
</body>
</html>