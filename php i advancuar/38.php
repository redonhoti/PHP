<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $url="http://www.google.com";
    $pastrimiUrl=filter_var($url, FILTER_SANITIZE_URL);
    if($url==$pastrimiUrl && filter_var($url. FILTER_VALIDATE_URL)){
        echo "$url eshte nje url i vlefshem uebsajti";
    }else{
        echo "$url nuk eshte nje url e vlefshme uebsajti";
    }
    ?>
</body>
</html>