<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Matematika</title>
</head>
<body>    
    <?php 
        $angka = 100;
        $angka2 = 2;
        $angka3 = 3;
        $angka4 = 4;

        echo "ini Operator Matematika <br>";       
        echo $angka + $angka2 ."<br>"; //102
        echo $angka * $angka2 ."<br>"; //200
        echo $angka + $angka2 * $angka3 ."<br>"; //106
        
        $angka++;//+1
        echo $angka ."<br>"; //101
        
        $angka2--;//-1
        echo $angka2 ."<br>"; //1

        $angka += $angka2;
        echo $angka ."<br>"; //102
        
        $angka3 *= $angka4;
        echo $angka3 ."<br>"; //12
        
    ?> 
</body>
</html>
