<!DOCTYPE html>
<html>
<head>
	<title>WEBSITE ISUN KAREPE ISUN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>SILAHKAN DAFTAR DEWEK BAE<br/></h1>

	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>WOYY SALAH HUU....!</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">MANGGA DAFTAR DEWEK</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
            
            <label>Konfirmasi Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="REGISTER"></br>
			<br>
			<center>ws due akun? <a href="login.php">login</a></center>
		</form>
		
	</div>
 
 
</body>
</html>