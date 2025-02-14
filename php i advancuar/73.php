<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $pattern='/\bcar\w*/';
    $replacement='<b>$0</b>';
    $text='Fjale qe fillojne me makine: karroce,karote,karikature.Fjalet qe
    mbarojne me makine: mbrese, oscar, supermakine';
    echo preg_replace($pattern, $replacement,$text);
    ?>
</body>
</html>