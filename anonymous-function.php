<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anonymous function</title>
</head>
<body>
    <?php         
        $halo = function(){
            echo 'haloooo';
        };  
        $halo();

        $salam = function($text){
            echo $text;
        };  
        $salam('selamat datang');
        
        $ola = function($text){
            echo $text;
        };
        $lempar = $ola;
        $lempar('selam');
    ?>
</body>
</html>
