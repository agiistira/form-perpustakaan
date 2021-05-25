<!DOCTYPE html>
<html>
<head>
    <title>Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.fancy{
			text-shadow: 4px 4px 3px #77f;
		}
	</style>
</head>
<body>
<header>
		<div class="jumbotron">
	<h1> Data Peminjaman Buku</h1>
</div>
</header>
<main>
<div id="content">
        <article class="card">
        <table border=1 cellpadding=3 cellspacing=3 align=center>
    <tr>
        <td align=center>Nama</td>
        <td align=center>Id Perpustakaan</td>
        <td align=center>Judul Buku</td>
        <td align=center>Nama Penerbit</td>
        <td align=center>Tahun Terbit</td>
        <td align=center>No Hp</hp>

    </tr>
    </article>
    </div>
</main>
<?php
include '2.php';
$select = mysqli_query ($conn, "SELECT * FROM tabel_buku");
while($hasil = mysqli_fetch_array($select)){
    ?>
    <tr>
        <td><?php echo $hasil ['Nama'] ?></td>
        <td><?php echo $hasil ['Id_Perpustakaan'] ?></td>
        <td><?php echo $hasil ['Judul_Buku'] ?></td>
        <td><?php echo $hasil ['Nama_Penerbit'] ?></td>
        <td><?php echo $hasil ['Tahun_Terbit'] ?></td>
        <td><?php echo $hasil ['No_Hp'] ?></td>
        <td>
            <a href="edit.php?Nama=<?php echo $hasil ['Nama' ] ?>">Edit</a> |
            <a href="delete.php?Nama=<?php echo $hasil ['Nama' ] ?>">Hapus</a>
        </td>
    </tr>
<?php } ?>
</table>
</body>
</html>