<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vlefshmëria e numrave Integer në PHP</title>
</head>
<body>
<?php
// Mostra e vlerës së plotë
$int= 20;
// Vërteto vlerën e numrit të plotë të mostrës
if(filter_var($int, FILTER_VALIDATE_INT)){ 
echo "Ky <b>$int</b> është një numër i plotë i vlefshëm";
} else {
    echo "Ky <b>$int</b>nuk është një numër i plotë i vlefshëm";
}
?>
</body>
</html>  
