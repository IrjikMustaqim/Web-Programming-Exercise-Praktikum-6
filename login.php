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

    if (!isset($_COOKIE['namauser'])){
        ?>
        <h1>Welcome to my site</h1>
        <p>Ini kunjungan Anda pertama kali di situs ini ya?</p>
        <p>Kita kenalan dulu ya, silakan masukkan nama Anda</p>
        <form method="post" action="game.php">
        Nama Anda <input type="text" name="username">
        <input type="submit" name="submit" value="Submit">
        </form>
        <?php
    }else{
        echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
        echo "<p><a href='form.php'>Login</a> dulu ya..</p>";
        exit();
    }
    ?>
    
</body>
</html>