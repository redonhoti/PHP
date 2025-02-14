<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $url="https://example.com?emri=Artan&mosha=25";
    if(filter_var($url, FILTER_SANITIZE_URL, FILTER_FLAG_QUERY_REQUIRED))
    {
        echo "URL-ja eshte e vlefshme dhe permban query string.";
    }else {
        echo "URL-ja eshte e pavlefshme ose nuk permban query string.";
    }
    ?>
</body>
</html>