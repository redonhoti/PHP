<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
    class greeting{
        public $str="Pershendetje Granit Xhaka!";

        function show_greeting(){
            return $this->str;
        }
    }
    $message=new greeting;
    var_dump($message);
    ?>
</body>
</html>