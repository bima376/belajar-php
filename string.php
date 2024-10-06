<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>
<body>    
    <?php 
       $h = "Halo";
       echo strlen($h);//4
       
       $a = "Halo";
       echo str_word_count($a);//1 menghitung tiap kata
       
       $b = "inotek";
       echo str_replace("Hai", "Halo", $b);
       
       echo str_repeat("Hai", 5);

       $ca = "inotek";
       echo str_repeat (str_replace("MAKAN", "Halo", $ca), 3);
       ?> 
</body>
</html>