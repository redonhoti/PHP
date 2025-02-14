<!DOCTYPE html>
<html lang =" en ">
<head>
<meta charset =" UTF-8 ">
<title>Galeria e thjeshtë e imazheve</title>
<style type="text/css"> 
.img-box{ 
display: inline-block; 
text-align: center; 
margin: 0 15px;    
}
</style>
</head>
<body>
    <?php
    // Varg(grup) që përmban emrat e fajllave të imazhit të mostrës
    $images= array ("kites.jpg", "balona.jpg");
    
    // Kaloni nëpër varg për të krijuar galerinë e imazheve
    foreach ( $images as $image ){
        echo '<div class=" img -box">';
            echo '< img src =images/'.$image.'" width="200" alt=" '.  pathinfo ($image, PATHINFO_FILENAME). '">';
           echo '<p><a href ="download.php?file ='.urlencode($image). '">Download</a></p>';
        echo '</div>';
    }
    ?>
</body>
</html>
