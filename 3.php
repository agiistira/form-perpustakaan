<?php
include"2.php";
$name=$_REQUEST['Nama'];
$ip=$_REQUEST['Id_Perpustakaan'];
$jb=$_REQUEST['Judul_Buku'];
$nb=$_REQUEST['Nama_Penerbit'];
$tb=$_REQUEST['Tahun_Terbit'];
$nh=$_REQUEST['No_Hp'];

$mysqli="INSERT INTO tabel_buku (Nama, Id_Perpustakaan, Judul_Buku, Nama_Penerbit, Tahun_Terbit, No_Hp) VALUES('$name','$ip','$jb','$nb','$tb','$nh')";
$result=mysqli_query($conn, $mysqli);

if($result){
	echo "Data Berhasil Di Input";
}else{
	echo "Ada Data Yang Salah, Coba Lagi !";
}
mysqli_close($conn);
?>