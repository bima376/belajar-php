<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>return</title>
</head>
<body>
    <?php         
        function menghitung ($x, $y){
            $z = $x + $y;
            return $z;
        }
        echo "hasil penjumlahan ". menghitung (2, 4); //6
        
        function hitung ($x, $y){
            $z = $x + $y;
            return $z;
        }
        $hasil = hitung (2, 4) * 10;
        echo "hasil penjumlahan dan perkalian ". $hasil; //6
    ?>
</body>
</html>
