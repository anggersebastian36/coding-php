<html>
<head><title>Pengolahan Form</title></head>
<body>
<FORM ACTION="" METHOD="POst" NAME="input">
Nama Anda : <input type="text" name="nama"><br>
<input type="submit" name="Input" value="Input">
</FORM>
</body>
</html>
<?php
if (isset($_POST['INPUT'])) {
$Nama = $_POST['nama'];
echo "Nama Anda : <b>$nama</b>";
}
?>

