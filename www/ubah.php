<?php
include_once("konfig.php");
 
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
		
	$result = mysqli_query($mysqli, "UPDATE anggota SET nama='$nama',email='$email',alamat='$alamat' WHERE id=$id");

	header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM anggota WHERE id=$id");
 
while($anggota_data = mysqli_fetch_array($result))
{
	$nama = $anggota_data['nama'];
	$email = $anggota_data['email'];
	$alamat = $anggota_data['alamat'];
}
?>
<html>
<head>	
	<title>Edit anggota Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form nama="update_anggota" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>nama</td>
				<td><input type="text" nama="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" nama="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>alamat</td>
				<td><input type="text" nama="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" nama="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" nama="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>