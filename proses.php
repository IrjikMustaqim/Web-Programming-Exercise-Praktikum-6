<?php
session_start();

$users = array(
array("username1", "M. Najmut Saqib Irji'i Mustaqim", "K3519051"),
array("username2", "Dwi Amalia Fitriani", "K3519052"),
array("username3", "Faza Fauzan Khosyiyarrohman", "K3519053")
);


if (isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    foreach ($users as $profile_user) {
        if (($profile_user[0] == $username) && ($profile_user[2] == $password)){
            
            $_SESSION["namauser"] = $profile_user[1];
            header("Location: page1.php");
        }
}
    echo "<h3>Login gagal</h3>";
    echo "<p>Silakan <a href='form.php'>login kembali</a></p>";
}else{
    echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
    echo "<p><a href='form.php'>Login</a> dulu ya..</p>";
}


?>