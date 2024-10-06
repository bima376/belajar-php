<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>callback</title>
</head>
<body>
    <?php         
       function panggil(){
        echo 'panggil kembali';
       }

    $memanggil = function(){
        echo 'waw';
    }

    ?>
</body>
</html>
