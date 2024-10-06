<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logika</title>
</head>
<body>    
    <?php    
        $pswd = '123';
        $pswd2 = 123;
        if ($pswd === $pswd2){
            echo 'berhasil';
        }else{
            echo 'gagal';
        }

        //== === > >= < <= !=

        $angka = 100;
        $angka2 = 1234;
        if ($angka > $angka2){
            echo 'lebih besar';
        }else{
            echo 'lebih kecil';
        }

        $nomor = 100;
        $nomor2 = 100;
        if ($nomor != $nomor2){
            echo 'benar, nomor tidak sama';
        }else{
            echo 'salah, nomor sama';
        }
    ?> 
</body>
</html>