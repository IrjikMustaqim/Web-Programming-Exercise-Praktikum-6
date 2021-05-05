<?php

if (!isset($_SESSION['namauser'])){
echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
echo "<p><a href='form.php'>Login</a> dulu ya..</p>";
// setelah memunculkan pesan di atas, selanjutnya dibreak dg exit()
exit();
}
?>