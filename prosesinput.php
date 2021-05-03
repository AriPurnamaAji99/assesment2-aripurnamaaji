<?php

include("config.php");

	if(isset($_POST['input_baru'])){
		$ip = $_POST['ip'];
		$keterangan = $_POST['keterangan'];


		$sql = "INSERT INTO tb_ip (ip, keterangan) VALUES ('$ip', '$keterangan')";
		$query = mysqli_query($db, $sql);

		if($query){

			header('Location: dashboard.php?modul=dataip');

		} else{

			header('Location: input.php?status=gagal');
		}

	}else{
		die("Akses Dilarang");
	}
?>