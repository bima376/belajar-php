<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scope</title>
</head>
<body>
    <?php         
        $a = 2000;
        $b = 3;

        function menghitung(){
            global $a, $b;
            
            $c = $a + $b;
            return $c;
        }
        echo menghitung();

        $d = 2000;
        $e = 30;

        function hitung(){

            $f = $GLOBALS['d'] + $GLOBALS['e'];
            return $f;
        }
        echo hitung();
    ?>
</body>
</html>
