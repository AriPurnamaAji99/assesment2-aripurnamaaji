<?php

include("config.php");

	if(isset($_POST['daftar_baru'])){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$password = md5 ($_POST["password"]);


		$sql = "INSERT INTO admin (nama, email, password) VALUES ('$nama', '$email', '$password')";
		$query = mysqli_query($db, $sql);

		if($query){

			header('Location: loginadmin.php?status=sukses');

		} else{

			header('Location: daftar.php?status=gagal');
		}

	}else{
		die("Akses Dilarang");
	}
?>