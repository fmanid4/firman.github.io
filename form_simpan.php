<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Tambah Product</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Id</td>
    <td><input type="text" name="id"></td>
  </tr>
  <tr>
    <td>Nama Product</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td><input type="number" name="price"></td>
  </tr>
   <tr>
    <td>Foto</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>