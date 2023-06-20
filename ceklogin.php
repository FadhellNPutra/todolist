<?php 
    session_start();
    include "library/config.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND Password='$password'");
    $data = mysqli_fetch_array($query);
    $jml = mysqli_num_rows($query);
    
    if ($jml > 0) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        header('Location: index.php');
    }else{
        echo "<p style='text-align: center;'>Login Gagal</p>";
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    };
?>