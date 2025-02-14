<!DOCTYPE html>
<html lang =" en ">
<head>
<meta charset =" UTF-8 ">
<title>Ruajtja dhe aksesimi i t dhënave të sesionit </title>
</head>
<body>
<?php
// Filloni sesionin
session_start();
// Ruani të dhëna në sesion
$_SESSION['username'] = 'Ardian';
$_SESSION['visits'] = isset($_SESSION['visits']) ? $_SESSION['visits'] + 1 : 1;
echo "Të dhënat janë ruajtur në sesion.<br>";
echo "Përshëndetje, " . $_SESSION['username'] . "!<br>";
echo "Kjo është vizita juaj nr. " . $_SESSION['visits'] . ".";
?>
</body>
</html>
