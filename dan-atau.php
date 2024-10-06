<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&& atau ||</title>
</head>
<body>
    <?php 
        $saku = 1000;
        $tablet = 2000;
        $teman = 5000;
        
        //&& atau ||

        if ($saku > $tablet || $teman > $tablet){

            echo 'dibelilah';
        }else{
            echo "ngga bisa";
        }

    ?>
</body>
</html>