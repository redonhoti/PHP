<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aktivizoni një gabim</title>
</head>
<body>
<?php
function calcDivision ( $dividend , $divisor ){
    if ($divisor == 0 ){
        trigger_error ( "Pjestuesi nuk mund të jetë zero" , E_USER_WARNING);
        return false;
    } else {
        return ( $dividend / $divisor );
    }
}
// Thirrja e funksionit
echo calcDivision ( 10 , 2 );
?>
</body>
</html>  
