<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vërtetoni numrat e plotë brenda një intervali</title>
</head>
<body>
<?php
// Funksioni i trajtuesit të gabimeve
function customError ($errno, $errstr){
    echo "<b>Gabim:</b> [$errno] $errstr";
}
// Vendos trajtuesin e gabimeve
set_error_handler ("CustomError");
echo ($test);
?>
</body>
</html>  
