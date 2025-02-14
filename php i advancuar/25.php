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
// Kontrolloni nëse sesioni është i ri ose ekzistues
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0; // Inicializoni një variabël sesioni
} else {
    $_SESSION['count']++; // Rritni vlerën për çdo rifreskim
}
// Shfaqni të dhënat e sesionit
echo "Numri i herëve që keni rifreskuar këtë faqe: ". $_SESSION['count'];
?>
</body>
</html>
