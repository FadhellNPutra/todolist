<?php 
    $host = 'localhost';
    $password = '';
    $user = 'root';
    $db = 'todolist';

    $con = mysqli_connect($host, $user, $password, $db);
    if(mysqli_connect_errno()){
        echo "Koneksi Gagal :" . mysqli_connect_error();
    };

?>