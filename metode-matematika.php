<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Matematika</title>
</head>
<body>    
    <?php 
        $angka = 100;
        $angka2 = 2;
        $angka3 = 3.5;
        $angka4 = 4;

        
        echo "angka bulat=". round($angka3) . "<br>"; //angka bulat 3.5 jadi 4
        echo "angka random=". rand(5, 10) . "<br>"; //angka random 5-10
        echo "angka besar=". max(5, 10) . "<br>"; //angka terbesar atauu max dari angka-angka
        echo "angka besar=". max($angka3, $angka, $angka3) . "<br>"; //angka terbesar dari angka-angka
        echo "angka besar=". min($angka3, $angka, $angka3) . "<br>"; //angka terkecil dari angka-angka
        
    ?> 
</body>
</html>