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
// Kontrolloni nëse ekzistojnë të dhënat e sesionit
if (isset($_SESSION['username']) && isset($_SESSION['visits'])) {
    echo "Përshëndetje përsëri, " . $_SESSION['username'] . "!<br>";
    echo "Ju keni vizituar këtë faqe " . $_SESSION['visits'] . " herë.";
} else {
    echo "Nuk ka të dhëna të ruajtura në sesion.";
}
?> 
</body>
</html>
