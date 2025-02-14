<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_REQUEST["name"])){
        echo "<p>Pershendetje," . $_REQUEST["name"] . "</p>";
    }
?>
<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Emri:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">   
</body>
</html>