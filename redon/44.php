<html lang="en">
<head>
    <title>Vargjet shumëdomensionale PHP</title>
</head>
<body>

<?php
// Definoni një varg shumëdimensional
$contacts = array(
    array (
        "emri" => "Zahir Pajaziti" ,
        "email" => "zahirpajaziti@mail.com" ,
    ),
    array (
        "emri" => "Adem Jashari" ,
        "email" => "ademjashari@mail.com" ,
    ),
    array (
        "emri" => "Ibrahim Rugova" ,
        "email" => "ibrahimrugova@mail.com" ,
    )
);
// Qasja në vlerën shumëdimensionale
echo "Email-i i Zahir Pajaziti-it është:". $contacts [0]["email"];
?>
</body>
</html>
