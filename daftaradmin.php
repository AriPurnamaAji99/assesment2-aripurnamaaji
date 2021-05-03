<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>daftar</title>
	<link rel="stylesheet" type="text/css" href="daftar_masuk.css">
</head>
<header><center><img src="logokang.jpg"></center></header>
<body>
	<div class = "kotakdaftar">
	<form method="post" action="prosesdaftaradmin.php">
		<table class="kotaktext">
		<p class="textdaftar">Daftar Admin</p>
		<td>
			<input type="text" name="nama" class="form_daftarlogin" placeholder="Nama Lengkap" required><br>
		</td>
		<tr>
			<td>
			<input type="text" name="email" class="form_daftarlogin" placeholder="Email" required><br>
		</td>
		</tr>
		<tr>
			<td>
			<input type="password" name="password" class="form_daftarlogin"  placeholder="Password" id="txtPassword" required><br>
		</td>
	</tr>
		<tr>
			<td>
			<input type="password" name="password" class="form_daftarlogin" placeholder="Confirm Password" id="txtConfirmPassword" required><br>
		</td>
	</tr>
		<tr>
			<td>
			<input type="submit" id="btnDaftar" name="daftar_baru" class="tombol_loginsign" value="DAFTAR">
			<input type="reset" name="reset" value=" RESET " class="tombol_loginsign">
			<br>
			<p>Sudah punya akun ? <a href="loginadmins.php" style="text-decoration: none;">&nbsp;&nbsp;Login</a></p>
		</td>
		</tr>
	</table>
</form>
</div>
<hr class="linefooter">
	<footer>
		<p>Copyright © 2014 - 2020 <br>PT. PDD Jaya Makmur All Rights Reserved.All other trademarks belong to their respective owners.</p>
	</footer>

</body>
</html>