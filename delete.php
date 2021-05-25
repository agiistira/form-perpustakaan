<?php
include '2.php';
if(isset($_GET['Nama'])){
	$delete = mysqli_query($conn, "DELETE FROM tabel_buku WHERE Nama = '".$_GET['Nama']."'");
	header('location:4.php');
}
?> 