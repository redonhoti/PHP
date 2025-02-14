<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$json='{"Yll":65,"Artan":80,"Dardan":78,"Taulant":90}';
$arr=json_decode($json, true);
echo $arr ["Yll"];
echo $arr ["Artan"];
echo $arr ["Dardan"];
echo $arr ["Taulant"];
$obj=json_decode($json);
echo $obj->Yll;
echo $obj->Artan;
echo $obj->Dardan;
echo $obj->Taulant;
?>
</body>
</html>