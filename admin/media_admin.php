<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">

<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
</head>
<body>
<header id="top">
	<div class="container_12 clearfix">
		<div id="logo" class="grid_5">
			<!-- replace with your website title or logo -->
			<a id="site-title" href="dashboard.html"><span>PetshopKu</span></a>
		</div>

		<div id="userinfo" class="grid_3">
			Welcome, <a href='#'>Administrator</a>
		</div>
	</div>
</header>

<section id="content">
	<section class="container_12 clearfix">
		<section id="main" class="grid_9 push_3">
			<article id="dashboard">
				<p>
					Hai <b>Mohamad Sholihin</b>, Selamat datang di halaman Administrator.<br>
          Silahkan klik menu pilihan yang berada di sebelah kiri untuk mengelola website.
				</p>
				<section class="icons">
					<ul>
						<li>
							<a href="?module=home">
								<img src="images/eleganticons/Home.png">
								<span>Home</span>
							</a>
						</li>
						<li>
							<a href="?module=admin">
								<img src="images/eleganticons/Person-group.png">
								<span>Administrator</span>
							</a>
						</li>
						<li>
							<a href="?module=member">
								<img src="images/eleganticons/Person-group.png">
								<span>Member</span>
							</a>
						</li>
						<li>
							<a href="?module=pemesanan">
								<img src="images/eleganticons/Info.png">
								<span>Pemesanan</span>
							</a>
						</li>
						<li>
							<a href="logout.php">
								<img src="images/eleganticons/X.png">
								<span>Logout</span>
							</a>
						</li>
					</ul>
      	</section>
			</article>
		</section>

  	<aside id="sidebar" class="grid_3 pull_9">
			<div class="box menu">
				<h2>Menu Utama<img src="images/icons/arrow_state_grey_expanded.png" class="toggle"></h2>
				<section>
					<ul>
						<li class="garisbawah"><a href="index.php">Home</a></li>
						<li class="garisbawah"><a href="?module=gpassword">Ganti Password</a></li>
						<li class="garisbawah"><a href="?module=produk">Produk</a></li>
						<li class="garisbawah"><a href="?module=kategori">Kategori</a></li>
						<li class="garisbawah"><a href="?module=member">Member</a></li>
						<li class="garisbawah"><a href="?module=pemesanan">Pemesanan Barang</a></li>
						<li class="garisbawah"><a href="?module=konfirmasi">Konfirmasi</a></li>
						<li class="garisbawah"><a href="?module=laporan">Laporan</a></li>
					</ul>
				</section>
			</div>
      <div class="box">
				<h2>Informasi<img src="images/icons/arrow_state_grey_expanded.png" class="toggle"></h2>
				<section>
					Anda masih dalam keadaan login sebagai : <b>Administrator</b>. <br>Jangan lupa untuk <a href="logout.php"><b>Logout</b></a> sebelum meninggalkan website ini.				</section>
			</div>
		</aside>
  </section>
</section>
</body>
</html>
