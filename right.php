<?php 
if($_GET['modul']=='home'){

?>

<div class="container-fluid">
    <h1 class="mt-4">Static Navigation</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="dashboard.php?modul=home">Dashboard</a></li>
        <li class="breadcrumb-item active">Static Navigation</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <p class="mb-0">
                Selamat Datang Di Halaman Admin
            </p>
        </div>
    </div>

<?php 
}else if ($_GET['modul']=='dataip') {
    include "tableip.php"; 

}else if ($_GET['modul']=='about') {
    include "Author.html";
}
?>