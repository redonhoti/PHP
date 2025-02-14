<!DOCTYPE html>
<html lang =" en ">
<head>
<meta charset =" UTF-8 ">
<title>Galeria e thjeshtë e imazheve</title>
</head>
<body>
<?php
// Qasja në një vlerë individuale të cookie-t
setcookie ("username", "Ardian Tahiri", time() +30*24*60*60);
echo $_COOKIE ["username"];
?>
</body>
</html>
