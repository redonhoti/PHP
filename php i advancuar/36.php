<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ip="172.16.254.1";
    if(filter_var($ip, FILTER_VALIDATE_IP)){
        echo "Kjo <b>$ip<?b> eshte IP adrese e vlefshme";
    }else{
        echo "Kjo <b>$ip</b>nuk eshte IP adrese e vlefshme";
    }
    ?>
</body>
</html>