<?php  
include 'config.php'; 
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];
$kepada = $_POST['kepada'];
$kehadiran = $_POST['kehadiran'];
$emot = $_POST['emot'];
 
mysqli_query($mysqli,"insert into pesan values('','$nama','$pesan', '$kepada', '$kehadiran', '$emot')");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>