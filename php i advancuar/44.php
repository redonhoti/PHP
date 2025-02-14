
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vërtetoni numrat e plotë brenda një intervali</title>
</head>
<body>
<?php
// Krijimi i një trajtuesi të personalizuar për gabimet
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    // Formati i mesazhit të gabimit
    $errorMessage = "[Gabimi $errno] $errstr në fajllin $errfile në rreshtin $errline.\n";
    // Shfaqja e mesazhit të gabimit
    echo "<b>Një gabim ka ndodhur:</b><br>";
    echo nl2br($errorMessage); // nl2br për të shtuar thyerje rreshtash për shfaqje HTML
    error_log($errorMessage, 3, "gabime.log");
    // Opsional: Ndalo ekzekutimin pas një gabimi fatal
    if ($errno === E_USER_ERROR) {
        echo "<b>Ky është një gabim fatal. Ekzekutimi ndalet.</b>";
        exit();
    }
}
// Regjistrimi i trajtuesit të personalizuar të gabimeve
set_error_handler("customErrorHandler");
// Prodhimi i disa gabimeve për shembull:
// Gabim i thjeshtë
echo $undefinedVariable; // Variabël e panjohur
// Paralajmërim
$divideByZero = 10/1;
// Gabim fatal i përdoruesit
trigger_error("Një gabim fatal i personalizuar ndodhi!", E_USER_ERROR);
// Gabim i zakonshëm i përdoruesit
trigger_error("Një gabim i zakonshëm ndodhi!", E_USER_WARNING);

// Shfaq mesazhin përfundimtar
echo "Kodi vazhdon këtu, nëse nuk ka gabime fatale.";
?>
</body>
</html>  
