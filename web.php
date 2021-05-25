<html>
<head>
	<title>Pemograman Web</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header>
		<div class="jumbotron">
	<h1> Form Database Perpustakaan</h1>
</div>
</header>
<main>
	<div id="content">
        <article class="card">
        <form method="POST" action="3.php">
        <fieldset>
        <legend>Form Peminjaman Buku</legend>
        <p>
            <label>Nama:</label>
            <input type="text" name="Nama" placeholder="Nama Peminjam..." />
        </p>
        <p>
            <label>Id Perpustakaan:</label>
            <input type="text" name="Id_Perpustakaan" placeholder="ID Perpustakaan..." />
        </p>
        <p>
            <label>Judul Buku:</label>
            <input type="text" name="Judul_Buku" placeholder="Judul Buku Yang Dipinjam..." />
        </p>
        <p>
            <label>Nama Penerbit:</label>
            <input type="text" name="Nama_Penerbit" placeholder="Nama Penerbit..." />
           
        </p>
        <p>
            <label>Tahun Terbit:</label>
            <input type="text" name="Tahun_Terbit" placeholder="Tahun Terbit..." />
           
        </p>
        <p>
            <label>No Hp:</label>
 			<input type="text" name="No_Hp" placeholder="No HP..." />
        </p>
        <p>
            <input type="submit" name="submit" value="Submit" />
        </p>
        </fieldset>
    </form>
</div>
<aside>
	<article class="card">
	<header>
	<div class="profile">
	<img src="1.jpg">
	<p>Biodata</p>
	Nama: Agistira Lamunde<br>
	Nim: 180155201031<br>
	Jurusan: Teknik Informatika<br>
	Fakultas: Fakultas Teknik<br>
	Universitas Maritim Raja Ali Haji<br>
</header>
</article>
</aside>
</main>
<footer>
	<p>Tugas Pemograman Web@2020</p>
</footer>
</body>
</html>