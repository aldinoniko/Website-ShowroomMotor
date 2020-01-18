<?php
include "config.php";
if(isset($_POST["submit"])){
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password =$_POST["password"];
	$email = $_POST['email'];
	mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$username', '$password', '$nama', '$email', 'user')") or die (mysqli_error($koneksi));
	header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<fieldset>
	<legend style="font-weight: bolder; font-size: 30px">Form Register</legend>
	<form method="POST">
	<table>
		<tr>
			<td><p>Nama</p></td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td><p>Email</p></td>
			<td>:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td><p>Username</p></td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td><p>Password</p></td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2">
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
	</table>
	</form>
</fieldset>
</body>
</html>