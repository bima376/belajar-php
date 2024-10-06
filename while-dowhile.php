<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while do while</title>
</head>
<body>    
    <?php    
    $hewan = ['anjing', 'babi', 'cicak', 'domba', 'buaya'];
        $a = 0;
        while($a < count($hewan)){
           echo $hewan[$a]. "<br>";
           $a++;
        }
        $animal = ['anjing', 'babi', 'cicak', 'domba', 'buaya'];
        $b = 1;
        do {
            echo $animal[$b]. "<br>";
           $b++;
        }while($b < count ($animal));
    

    ?> 
</body>
</html>