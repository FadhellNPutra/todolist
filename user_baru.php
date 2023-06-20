<?php 
    include "library/config.php";

    
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // $getQuery = mysqli_query($con, "SELECT * FROM user");
    $query = mysqli_query($con, "INSERT INTO user SET nama_user ='$nama', username='$username', Password='$password'");

    if($query){
        echo "<script>alert('Berhasil Mendaftar! Silahkan Login Dahulu!')</script>";

        header('Location: login.php');
    }else{
        echo "<script>alert('Gagal Mendaftar! Username atau Password tidak valid.')</script>";

        echo mysqli_error($con);
    }

    

?>