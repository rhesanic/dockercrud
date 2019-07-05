<?php
include_once("konfig.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM anggota ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>ini index</title>
</head>
 
<body>
    <table width='100%' border=1>
 
    <tr>
        <th>nama</th> <th>alamat</th> <th>email</th> <th>aksi</th>
    </tr>
    <?php  
    while($anggota_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$anggota_data['nama']."</td>";
        echo "<td>".$anggota_data['alamat']."</td>";
        echo "<td>".$anggota_data['email']."</td>";    
        echo "<td><a href='ubah.php?id=$anggota_data[id]'>ubah</a> | <a href='hapus.php?id=$anggota_data[id]'>hapus</a></td></tr>";        
    }
    ?>
    </table>
<a href="tambah.php">tambah anggota</a><br/><br/>
</body>
</html>