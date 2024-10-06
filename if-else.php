<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if & else</title>
</head>
<body>    
    <?php    
        $pswd = '123';
        $pswd2 = '123';
        if ($pswd == $pswd2){
            echo 'berhasil';
        }else{
            echo 'gagal';
        }

        // lebih satu syarat
        $uang = 1000;
        $laptop = 2000;
        $pinjam_teman = 3000;

        if($uang > $laptop){
            echo 'dibeli';
        }else if ($pinjam_teman > $laptop){
            echo 'beli!';
        }else{
            echo 'gk cukup';
        }

        // if bercabang
        $dompet = 1000;
        $hp = 2000;
        $pinjol = 5000;

        if($dompet > $hp){
            echo 'dibeli';
        }
        
        else if ($pinjol > $hp){
            echo 'dibeli oleh aku!';

            if($dompet >=$hp * 2){
                echo 'diambil dua kali oleh pinjol';
            }
        }else{
            echo 'gk cukup';
        }



        
    ?> 
</body>
</html>