<html>
<head>
	<title>tambah anggota</title>
</head>
 
<body>
 
	<form action="add.php" method="post" nama="form1">
		<table width="25%" border="0">
			<tr> 
				<td>nama</td>
				<td><input type="text" nama="nama"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" nama="email"></td>
			</tr>
			<tr> 
				<td>alamat</td>
				<td><input type="text" nama="alamat"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" nama="Submit" value="tambah"></td>
			</tr>
		</table>
	</form>
	<br/><br/>
	<a href="index.php">index</a>
	<?php
 
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		
		include_once("konfig.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO anggota(nama,email,alamat) VALUES('$nama','$email','$alamat')");
		
		echo "anggota added successfully. <a href='index.php'>lihat anggota</a>";
	}
	?>
</body>
</html>