<!DOCTYPE html>
<html lang =" en ">
<head>
<meta charset =" UTF-8 ">
<title>Galeria e thjeshtë e imazheve</title>
</head>
<body>
<?php
// Filloni sesionin
session_start();
// Fshini të dhënat e sesionit
session_unset(); // Pastron të gjitha variablat e sesionit
session_destroy(); // Shkatërron sesionin
echo "Sesioni është fshirë dhe përfunduar.";
?>
</body>
</html>
