<html lang="en">
<head>
    <title>Hapja e një fajlli në PHP</title>
</head>
<body>
<?php
$lapsi = fopen("data.txt", "r") or die("GABIM: Fajlli nuk mund të hapet.");
if($lapsi){
    echo "Fajlli u hap me sukses.";
    fclose($lapsi);
}
?>
</body>
</html>
