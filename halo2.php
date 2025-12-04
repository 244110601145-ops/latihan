<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     date_default_timezone_set("Asia/Jakarta");
     echo "<font color='blue'><strong>Hello World</strong></font><br>";
        echo "Sekarang Tanggal : ".date("d M Y")."<br>";
        echo "Sekarang Jam : ".date("H:i:s")."<br>";
        echo "Hari : ".date("l")."<br>";
        $nama="nihaya";
        $sekarang=date("H");
        if($sekarang<"12"){
            echo"selamat pagi $nama";
        }elseif($sekarang<"18"){
            echo"selamat siang $nama";
        }else{
            echo"selamat malam $nama";
        }
   ?>

</body>
</html>