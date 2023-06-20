<?php 
    session_start();
    session_destroy();

    echo "<p style='text-align: center;'>Anda telah keluar!</p>";
    echo "<meta http-equiv='refresh' content='1; url=login.php'>";
?>