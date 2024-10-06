<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parameter</title>
</head>
<body>
    <?php 
        function print_text($text)
        {
            echo $text;
        }
        function jarak(){
            echo"<br>";
        }

        print_text("param satu");
        jarak();
        print_text("param dua");
        jarak();
        print_text("param tiga");

        function teks($teks)
        {
            $teks = "parameter" . $teks;
            echo $teks;
        }
        function space(){
            echo"<br>";
        }

        teks(" satu");
        jarak();
        teks(" dua");
        jarak();
        teks(" tiga");
        
        function tulisan($tulisan, $angka)
        {
            $tulisan = "params" . $tulisan . "" . $angka;
            echo $tulisan;
        }
        function ruang(){
            echo"<br>";
        }

        tulisan(" satu", 1);
        ruang();
        tulisan(" dua", 2);
        ruang();
        tulisan(" tiga", 3);
    ?>
</body>
</html>
