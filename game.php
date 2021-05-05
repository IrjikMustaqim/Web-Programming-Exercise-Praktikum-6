<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // bagian yang dieksekusi ketika pengunjung submit nama
    
    if (isset($_POST['submit'])){
    
        setcookie("username", $_POST['username'], 0,"/");
        setcookie("kebenaran", 0, 0,"/");
        

        
        header("Location:game.php");
    }else if(isset($_COOKIE['username'])){
        if(!isset($_COOKIE['angka'])){
            setcookie("angka", mt_rand(0,100), 0,"/");
        }
        if(isset($_COOKIE['kebenaran'])){
            if($_COOKIE['kebenaran'] == 0){
                echo "Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan
                Anda menebak ya!";
                if (isset($_COOKIE['clue'])){
                    echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu".$_COOKIE['clue'].".";
                }
                echo "<form method='post' action='cekjawaban.php'>
                Nama Anda <input type='text' name='jawaban'>
                <input type='submit' name='jawab' value='Submit'>
                </form>";
            }else{
                echo "Selamat ya… Anda benar, saya telah memilih bilangan".$_COOKIE['angka'].".";
                setcookie("kebenaran", 0, 0,"/");
                setcookie("angka", 0, time()-3600,"/");
                
                echo "<a href='game.php'>Ulangi lagi<a>";
            }
        }
        
    }else{
        header("Location:login.php");
    }
    
?>
</body>
</html>