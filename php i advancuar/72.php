<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$pattern="/colo/i";
$text="Ngjyra e kuqe eshte me e dukshme se ngjyra e kalter.";
$matches=preg_match_all($pattern,$text,$array);
echo $matches . " u gjeten ndeshje."
    ?>
</body>
</html>