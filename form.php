<!DOCTYPE html>
<html>
<head>
<title>Contoh</title>
</head>
<body>
    <?php
    session_start();
    echo "<h1>Test Login</h1>
    <form method='post' action='proses.php'>
    Username <input type='text' name='username'>
    Password <input type='password' name='password'>
    <input type='submit' name='submit' value='Submit'>
    </form>";
    ?>
    
</body>
</html>