<!DOCTYPE html>
<html lang =" en ">
<head>
<meta charset =" UTF-8 ">
<title>Galeria e thjeshtë e imazheve</title>
</style>
</head>
<body>
<?php
// Verifikimi nëse një cookie është vendosur apo jo
if (isset($_COOKIE ["username"])){
    echo "Përshëndetje " . $_COOKIE ["username"];
} else {
    echo "Mirë se vini Mysafir!" ;
}
?>
</body>
</html>
