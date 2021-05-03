<?php

include("config.php");

	$email = $_POST['email'];
	$password = md5 ($_POST["password"]);

	$sql = "SELECT * from admin where email='$email' and password ='$password'";
	$query = mysqli_query($db, $sql);
		if($query){

		header('Location: listdaftar.php?status=sukses');

	} else{

		header('Location: loginadmin.php?status=gagal');
	}
?>