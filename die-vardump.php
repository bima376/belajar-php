<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>die var dump</title>
</head>
<body>
    <?php 
    $tas = 'laptop';
    var_dump($tas); //melihat ditail varibel atau apapun yg ditampilkan
    
    $pulpen = ['tinta', 'karet'];
    var_dump($pulpen);

    $buku = 'kertas';
    die($buku);//menghentikan proses script
    
    $gelas = 'air';
    echo $gelas;
    die();
    ?>
</body>
</html>