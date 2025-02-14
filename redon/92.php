<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php function izpisTabeleTock($tocke){
        echo "<table class='tct'>";
        foreach($tocke as $barva=>$tocka){
            if($barva == 'red'){
                echo "<tr>";
                for($i = 0; $i < count($tocka); $i++){
                    echo "<td style='color:red'>(". $tocka[$i][0] .",". $tocka[$i][1] .")</td>";
                }
                echo "</tr>";
            }

            else if($barva == 'green'){
                echo "<tr>";
                for($i = 0; $i < count($tocka); $i++){
                    echo "<td style='color:green'>(". $tocka[$i][0] .",". $tocka[$i][1] .")</td>";
                }
                echo "</tr>";
            }
            else if($barva == 'blue'){
                echo "<tr>";
                for($i = 0; $i < count($tocka); $i++){
                    echo "<td style='color:blue'>(". $tocka[$i][0] .",". $tocka[$i][1] .")</td>";
                }
                echo "</tr>";
            }
            else{
                echo "<tr>";
                for($i = 0; $i < count($tocka); $i++){
                    echo "<td style='color:silver'>(". $tocka[$i][0] .",". $tocka[$i][1] .")</td>";
                }
                echo "</tr>";
            }

        }
        echo "</table>";
    }
?>
<style>
    table,tr,td,th{
        border-collapse: collapse;
        border: 1px solid black;
        text-align: center;

    }
    </style>
</body>
</html>