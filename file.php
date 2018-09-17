<?php
$data = $_FILES['gambar']['name'];
if (isset($_POST['upload'])) {
	move_uploaded_file($_FILES['gambar']['tmp_name'], "bunga/".$_FILES['gambar']['name']);
	echo "SELAMAT GAMBAR ANDA BERHASIL DI UNGGAH";
	echo "<br><br>";
	echo "<img src = 'bunga/$data' >";
}
?>