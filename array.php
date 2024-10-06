<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>    
    <?php 
        $kandang = array('sapi', 'ayam', 'kucing');
        $abjad = array('o', 'a', 'u');
        $a = array('t', 'qq', 'uuuu');
        print_r($kandang) ; //'sapi', 'ayam', 'kucing'
        echo $kandang [0] ; //sapi
        echo $kandang [1] ; //ayam

        print_r(array_reverse($kandang)) ; //'kucing', 'ayam', 'sapi'

        shuffle($abjad); //acak
        print_r($abjad);

        sort($a); //mengurutkan sesuai urutan abjad / angka
        print_r($a);

        echo count($abjad);// terdeteksi 3 kotak
    ?> 
</body>
</html>