<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multidimensi array</title>
</head>
<body>    
    <?php         
       $data = array(
        array("babababa", "3131", "mules"),
        array("ggugu", "221", "raj"),
       );

       print_r($data);

       //00 01 02
       //10 11 12
       //20 21 22
        $data[2][0] = 'projek';
       echo $data[0][2];
    ?> 
</body>
</html>
