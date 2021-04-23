<!DOCTYPE html>
<html> <head><title>Form</title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <form id="formbiodata" action="proses.php" method="post">
 <table>
 <tr>
 <td>Nama</td>
 <td><input type="text" name="nama" size="20"></td>
 </tr>
 <tr>
 <td>Alamat</td>
 <td><textarea cols="20" rows="5" name="alamat"></textarea></td>
 </tr>
 <tr>
 <td>No Handphone</td>
 <td><input type="text" name="no_hp" size="20"></td>
 </tr>
 <tr>
 <td><input type="submit" name="proses" value="Proses"></td>
 <td><input type="reset" value="Batal"></td>
 </tr>
 </table>
 </form>
</body>
</html> 