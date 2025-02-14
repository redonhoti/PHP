<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$text="aaa bbb ccc ddddd 123 4567";

$patterns=[
    '/a{3}/'=>'Saktesisht 3 perseritje te karakterit "a"',
    '/b{2,}/'=>'Te pakten 2 perseritje te karakterit "b"',
    '/c{2,4}/'=>'2 deri ne 4 perseritje te karakterit "c"',
    '/d{3}/'=>'Saktesisht 3 shifra (numra)',
    '/d+/'=>'Te pakten nje shifer',
    '/d*/'=>'Asnje ose me shume shifra(perputhet gjithmone)',
    '/d?/'=>'Opsionale: asnje ose nje shifer',
];

foreach($patterns as $pattern => $description){
    echo "Pattern: $pattern - $description\n";
    if(preg_match_all($pattern,$text,$matches)){
        echo "Perputhje te gjetura:" . implode(",",$matches[0]) . "\n";
    }else {
        echo "Asnje perputhje nuk u gjet.\n";
    }
    echo "\n";
}
    ?>
</body>
</html>