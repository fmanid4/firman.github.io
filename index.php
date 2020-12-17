<html>
<head>
	<title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
    	<h1>Data Product</h1>
    	<a href="form_simpan.php">Tambah Data</a><br><br> 
    	<table border="1" width="100%">
    		<tr>
				<th>ID</th>
				<th>Nama Produk</th>
				<th>Harga</th>
    			<th>Foto</th>
    			
    			
    			<th colspan="2">Aksi</th>
    		</tr>
    		<?php  // Load file koneksi.php
    		include "koneksi.php";
    		$query = "SELECT * FROM product"; // Query untuk menampilkan semua data siswa
    		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    		while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql   
    		echo "<tr>";
    			echo "<td>".$data['id']."</td>";
    			echo "<td>".$data['product_name']."</td>";
    			echo "<td>".$data['harga']."</td>";
    			echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
    			echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    			echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    		echo "</tr>";  }  ?>
    	</table>
    </body>
</html>