<?php

 ?>

<?php $conn = mysqli_connect('localhost','root', '', 'regis_pelanggan'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>KangCukur | Data pesanan</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

   <link rel="stylesheet" type="text/css" href="admin.css">

</head>
<header>
   <button type="button" class="btn btn-light"><a href="input.php" style="text-decoration: none;">Tambah data</a></button>  

<body>

    <table class="table table-bordered" class="table-primary">
        <thead>
        
         <tr class="bg-light">
            <th>No</th>
            <th>Ip</th>
            <th>Semester</th>
            <th>Pengaturan</th>
        </tr>

    </thead>

    <tbody>
    
        <?php
        $sql = "SELECT * FROM tb_ip";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr class="bg-light">
                <td><?= $row['id'] ?></td>                
                <td><?= $row['ip'] ?></td>
                <td><?= $row['keterangan'] ?></td>
                <td><a href="proseshapusadmin.php?id=<?=$row['id']?>">Hapus</a><br><a href="prosesedit.php?<??>">Edit</a></td>
            </tr>
            <?php
        }
        ?> 

        </tbody>
    </table> 

</body>
</html>