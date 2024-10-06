<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>true false</title>
</head>
<body>
    <?php 
        $saku = 1000;
        $tablet = 2000;
        $teman = 5000;
        // true atau false

        $hasil = true;
        $hasil2 = false;
        if(true){
            echo 'dibeli oleh dia';
        }
        
        else if ($teman > $tablet){
            echo 'dibeli oleh aku!';

            if($saku >=$tablet * 2){
                echo 'diambil dua kali oleh pinjol';
            }
        }else{
            echo 'gk cukup';
        }

        $saku = 1000;
        $tablet = 2000;
        $teman = 5000;
        // true atau false

        $hasil = true;
        $hasil2 = false;
        if($hasil2){
            echo 'dibeli oleh dia';
        }
        
        else if ($hasil2){
            echo 'dibeli oleh aku!';

            if($saku >=$tablet * 2){
                echo 'diambil dua kali oleh pinjol';
            }
        }else{
            echo 'gk cukup';
        }
    ?>
</body>
</html>
