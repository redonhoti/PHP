<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$email="ardiani53@gmail.com";
$sanitizedEmail=filter_var($email, FILTER_SANITIZE_EMAIL);
if($email==$sanitizedEmail && filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "$email eshte nje adrese e vlefshme emaili";
}else{
    echo "$email nuk eshte nje adrese e vlefshme emaili";
}
    ?>
</body>
</html>