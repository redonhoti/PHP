<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset ="UTF-8">
    <title>Ngarkimi i formularit të fajllit</title>
</head>
<body>
<?php
// Kontrolloni nëse formulari është dorëzuar
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    // Kontrollo nëse fajlli është ngarkuar pa gabime
    if(isset($_FILES ["foto"])&& $_FILES ["photo"]["error"]==0){
        $allowed= array ("jpg" => "images/jpg", "jpeg" => "images/jpeg", "gif" => "images/gif", " png " => "images/png");
        $filename= $_FILES ["photo"]["name"];
        $fletype= $_FILES ["photo"]["type"];
        $filesize= $_FILES ["photo"]["size"];
    
        // Verifiko zgjerimin e fajllit
        $ext= pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists ($ext, $allowed)) die ( "Gabim: Ju lutemi zgjidhni një format të vlefshëm fajlli.");
    
        // Verifiko madhësinë e fajllit- maksimumi 5MB
        $maxsize= 5 * 1024 * 1024;
        if ($filesize > $maxsize) die ("Gabim: Madhësia e fajllit është më e madhe se kufiri i lejuar.");
    
        // Verifikoni llojin MYME të fajllit
        if (in_array ($filetype, $allowed)){
       // Kontrolloni nëse fajlli ekziston përpara se ta ngarkoni atë
            if (file_exists ("upload/". $filename)){
                echo $filename. "ai tashmë ekziston.";
            } else {
 move_uploaded_file ($_FILES ["photo"]["tmp_name"], "upload/" .$filename);
         echo "Fajlli juaj u ngarkua me sukses." ;
            } 
        } else {
            echo "Gabim: Kishte një problem me ngarkimin e fajllit tuaj. Ju lutemi provoni përsëri."; 
        }
    } else {
        echo "Gabim: " . $_FILES ["photo"]["gabim"];
    }
}
?>
</body>
</html>
