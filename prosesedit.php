<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $ip = $_POST['ip'];
    $keterangan = $_POST['keterangan'];

    $sql = "UPDATE tb_ip SET ip='$ip', keterangan='$keterangan' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    if( $query ) {

        header('Location: tabelip.php');

    } else {

        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>