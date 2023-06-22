<?php 
    // 1. Buat Session
    session_start();
    ob_start();

    include "library/config.php";
    
    if(!empty($_SESSION['username']) || !empty($_SESSION['password'])){
        define('INDEX', true);
    }else{
        echo "<p style='text-align: center;'>Anda harus login dahulu!</p>";
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    };
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            To do List
        </header>
        <div class="container">
            <aside>
                <ul class="menu">
                    <!-- <li> <a href="?hal=dashboard">Dashboard</a></li> -->
                    <li> <a href="?hal=tambah_kegiatan" class="aktif">Tambah Kegiatan</a> </li>
                    <li> <a href="?hal=kegiatan_soon">Kegiatan mendatang</a> </li>
                    <li> <a href="?hal=kegiatan_selesai">Kegiatan Selesai</a> </li>
                    <li> <a href="logout.php">Keluar</a> </li>
                </ul>
            </aside>
        <section class="main">
            <?php include "konten.php"; ?>
        </section>
        </div>
        <footer>
            Copyright &copy; Rohi Abdulloh
        </footer>
    </body>
</html>