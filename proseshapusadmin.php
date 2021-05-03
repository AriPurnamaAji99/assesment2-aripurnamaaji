<?php 

include("config.php");
$id = $_GET['id'];
	
	$sql = "DELETE FROM `tb_ip` WHERE id='$id'";
	$result = $db->query($sql); 
	echo "<script> alert('Data Sudah Terhapus');</script>";
	echo "<script> location='dashboard.php?modul=dataip'; </script>";

 ?>