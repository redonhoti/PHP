<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numer=13.78;
    $min=1;
    $max=11;
    if(filter_var($numer, FILTER_VALIDATE_INT, ["options"=>["min_range"=>$min, "max_range"=>$max]])){
        echo "Numri $numer eshte nje numer i plote dhe eshte jashte intervalit $min - $max.";
    }else{
        echo "Numri $numer nuk eshte nje numer i plote ose nuk eshte brenda intervalit $min - $max.";
    }

    ?>
</body>
</html>