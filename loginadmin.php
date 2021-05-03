<?php 
    session_start();

    if(isset($_SESSION["loginadmin"])){
        header("location: loginadmin.php");
        exit;
    }
 ?>

<?php $conn = mysqli_connect('localhost','root', '', 'regis_pelanggan'); ?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>daftar</title>
    <link rel="stylesheet" type="text/css" href="daftar_masuk.css">
</head>
<header><center><img src="logokang.jpg"></center></header>
<body>
    <div class = "kotaklogin">
    <form method="post" action="">
        <table class="kotaktext">
            <p class="textdaftar">Login Admin</p>
        <td>
            <input type="text" name="email" class="form_daftarlogin" placeholder="Email" required><br>
        </td>
        </tr>
        <tr>
            <td>
            <input type="password" name="password" class="form_daftarlogin" placeholder="Password" id="txtPassword" required><br>
        </td>
    </tr>
        <tr>
            <td>
            <input type="submit" id="btnLogin" name="loginadmin" value="Login" class="tombol_loginsign">
            <br>
            <p>Belum punya akun ? <a href="daftaradmin.php" style="text-decoration: none;">&nbsp;&nbsp;Daftar</a></p>
        </td>
        </tr>
    </table>
</form>
</div>
<hr class="linefooter">
    <footer>
        <p align="center">Copyright © 2014 - 2020 <br> PT. PDD Jaya Makmur All Rights Reserved.All other trademarks belong to their respective owners.</p>
    </footer>

<?php 

if (isset($_POST['loginadmin'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql      = "SELECT * FROM admin WHERE email=LOWER('$email') AND password='$password';";
    $result     = $conn->query($sql);
    $row        = $result->fetch_assoc();
    if (!empty($row)) {
        $_SESSION["loginadmin"] = true;
        header('location: dashboard.php?modul=home');
    } else{
        echo "email atau Password salah";
    }
}
 ?>

</body>
</html>