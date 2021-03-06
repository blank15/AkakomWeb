<?php
	include_once "koneksi.php";
	$id = $_GET['id'];

	$sqlBerita = "SELECT * FROM tb_berita WHERE id = '$id' ";
	$berita = mysqli_query($konek, $sqlBerita);
?>
<!DOCTYPE html>
<html>

<head>
	<title>STMIK Akakom | Berita</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="index.php">STMIK Akakom</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
		    aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Beranda
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
					    aria-expanded="false">
						Profil Akakom
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="visimisi.php">Visi dan Misi</a>
						<a class="dropdown-item" href="profile.php">Profil STMIK Akakom</a>
						<a class="dropdown-item" href="#">Kontak Kami</a>
						<a class="dropdown-item" href="pejabat.php">Pejabat di STMIK Akakom</a>
						<a class="dropdown-item" href="kontak.php">Kontak Dosen STMIK Akakom</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
					    aria-expanded="false">
						Program Studi/ Jurusan
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="ka.php">Komputerisasi Akuntansi (D3)</a>
						<a class="dropdown-item" href="tk.php">Teknik Komputer (D3) </a>
						<a class="dropdown-item" href="mi.php">Manajemen Informatika (D3)</a>
						<a class="dropdown-item" href="si.php">Sistem Informasi (S1)</a>
						<a class="dropdown-item" href="ti.php">Teknik Informatika (S1)</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="info_kampus.php">Info Kampus</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="berita.php">Berita</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="arsip_umum.php">Arsip Umum</a>
				</li>
			</ul>

			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Pencarian" aria-label="Search">
				<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cari</button>
			</form>
		</div>
	</nav>
	<?php
		$row=mysqli_fetch_assoc($berita);
	?>
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 style="margin-top:1em; margin-bottom:0.5em"><?php echo $row['judul']; ?></h2>
				<?php if($row['gambar']!=''){ ?>
				<img class="card-img-top" src="img/<?php echo $row['gambar']; ?>" alt="No image found">
				<?php } ?>
				<div class="card" style="margin-bottom:1em;">
					<div class="card-block" style="padding:1em; ">
						<p class="text-muted"><?php echo $row['author'].", ".$row['tanggal']; ?></p>
						<p class="card-text text-justify"><?php echo $row['isi']; ?></p>
					</div>
				</div>
			</div>
		<div class="col-sm-3">
				<br>
				<div class="card">
					<div class="card-header bg-primary text-white">
						Tautan
					</div>
					<div class="card-body">
						<ul class="list-group list-group-flush">
							<li class="list-group-item">
								<a href="http://www.widyabaktiyk.or.id/" target="output">Yayasan Pendididkan Widya Bakti</a>
							</li>
							<li class="list-group-item">
								<a href="https://pmb.akakom.ac.id/web/index.php" target="output">Pendaftaran Mahasiswa </a>
							</li>
							<li class="list-group-item">
								<a href="http://blog.akakom.ac.id/" target="output">Blog Mahasiswa</a>
							</li>
							<li class="list-group-item">
								<a href="https://siakad.akakom.ac.id/" target="output">Portal Akademik</a>
							</li>
							<li class="list-group-item">
								<a href="http://lab.akakom.ac.id/" target="output">Laboratorium Akakom</a>
							</li>
							<li class="list-group-item">
								<a href="http://acc.akakom.ac.id/" target="output">Career Center</a>
							</li>
							<li class="list-group-item">
								<a href="http://ika.akakom.ac.id/" target="output">Ikatan Keluarga Alumni</a>
							</li>
							<li class="list-group-item">
								<a href="http://olimpiade.akakom.ac.id/" target="output">Olimpiade Komputer</a>
							</li>
							<li class="list-group-item">
								<a href="http://sriti.akakom.ac.id/" target="output">SRITI Akakom</a>
							</li>
							<li class="list-group-item">
								<a href="https://pjm.akakom.ac.id/index1.html" target="output">Pusat Jaminan Mutu</a>
							</li>
							<li class="list-group-item">
								<a href="https://perpus.akakom.ac.id/site/" target="output">Perpustakaan Akakom</a>
							</li>
							<li class="list-group-item">
								<a href="https://dikti.go.id/" target="output">DIKTI</a>
							</li>
							<li class="list-group-item">
								<a href="https://puslitbang.akakom.ac.id/" target="output">Puslitbang AKAKOM</a>
							</li>
							<li class="list-group-item">
								<a href="https://ejournal.akakom.ac.id/index.php/jiko" target="output">Jiko-AKAKOM</a>
							</li>
							<li class="list-group-item">
								<a href="http://itfest.akakom.ac.id/" target="output">AKAKOM IT Fest 2016</a>
							</li>
						</ul>
					</div>
				</div>

				<br>
				<?php include "sidebar.php"; ?>
		</div>

		<br>
	<br>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h4 class="display-12 text-danger">Yang Pertama dan Utama</h4>
				<p class="lead" align="justify">
					Yayasan Pendididkan Widya Bakti berdiri dengan Akta Notaris Nomor 43 tanggal 30 Juni 1979, sebagai penyelenggara pendidikan
					tinggi dibidang komputer yang pertama di Jateng dan DIY dengan nama Akademi Aplikasi Komputer (AKAKOM). Tahun 1985 AKAKOM
					menjadi AMIK AKAKOM dan akhirnya sejak tahun 1992 menjadi STMIK AKAKOM.
				</p>
				<hr class="my-4">
				<img class="img-fluid" style="width:100%" src="img/jurusan.png">
			</div>
		</div>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
