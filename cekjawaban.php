<?php

if(isset($_COOKIE['username'])){
    if(isset($_POST['jawab'])){
        if($_POST['jawaban'] > $_COOKIE['angka']){
            setcookie("clue", "tinggi", 0,"/");
            header("Location:game.php");
        }else if($_POST['jawaban'] < $_COOKIE['angka']){
            setcookie("clue", "rendah", 0,"/");
            header("Location:game.php");
        }else{
            setcookie("clue", "", time()-3600,"/");
            setcookie("kebenaran", 1, 0,"/");
            header("Location:game.php");
        }
        
    }    
}else{
    header("Location:login.php")
}

?>