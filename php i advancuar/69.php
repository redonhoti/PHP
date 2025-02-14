<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$text="Ky eshte nje tekst i thjeshte,me numra si 123 dhe karaktere te tjera!";
$patterns=[
    '/\d/'=>'Gjen nje numer (shifer)',
    '/\D/'=>'Gjen cdo karakter qe nuk eshte numer',
    '/\w/'=>'Gjen shkronja,numra dhe nenvizime',
    '/\W/'=>'Gjen cdo karakter qe nuk eshte \w',
    '/\s/'=>'Gjen hapesirat bosh',
    '/\S/'=>'Gjen cdo karakter qe nuk eshte hapesire bosh'
];
foreach ($patterns as $pattern =>$description){
    echo "Pattern: $pattern - $description\n";
    if(preg_match_all($pattern,$text,$matches)){
        echo "Perputhje te gjetura:" . implode(",",$matches[0]) . "\n";
    }else{
        echo "Asnje perputhje nuk u gjet.\n";
    }
    echo "\n";
}
    ?>
</body>
</html>