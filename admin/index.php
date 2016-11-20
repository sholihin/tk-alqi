<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">

<script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" media="all"/>
<!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"> -->
</head>
<body>
<?php include "cek_session.php"; ?>
<header id="top">
	<div class="container_12 clearfix">
		<div id="logo" class="grid_5">
			<!-- replace with your website title or logo -->
			<a id="site-title" href="index.php"><span>TK Alqi</span></a>
		</div>

		<div id="userinfo" class="grid_3">
			Welcome, <a href='#'>
        <?php
          session_start();
          echo $_SESSION['login_admin']['name_admin'];
        ?>
      </a>
		</div>
	</div>
</header>

<section class="container_12 clearfix" style="margin-top:15px;">
  <?php
    switch ($_GET['module']) {
				//siswa
        case "siswa":
            include "siswa/index.php";
        break;
				case "editsiswa":
            include "siswa/edit.php";
        break;

				//kelompok
        case "kelompok":
            include "kelompok/index.php";
        break;
				case "editkelompok":
            include "kelompok/edit.php";
        break;

				//siswa
        case "program":
            include "program/program.php";
        break;
				case "editprogram":
            include "program/editprogram.php";
        break;

				// laporan
				case "laporan":
            include "laporan.php";
        break;

				// config
        case "gantipassword":
            include "gantipassword.php";
        break;
				case "password":
            include "password.php";
        break;

        default:
          include "dashboard.php";
    }
  ?>

  <aside id="sidebar" class="grid_3 pull_9">
		<div class="box menu">
			<h2>Menu Utama<img src="images/icons/arrow_state_grey_expanded.png" class="toggle"></h2>
			<section>
				<ul>
					<li class="garisbawah"><a href="index.php">Home</a></li>
					<li class="garisbawah"><a href="?module=kelompok">Kelompok</a></li>
					<li class="garisbawah"><a href="?module=siswa">Siswa</a></li>
					<li class="garisbawah"><a href="?module=program">Program</a></li>
					<li class="garisbawah"><a href="?module=laporan">Laporan</a></li>
					<li class="garisbawah"><a href="?module=gantipassword">Ganti Password</a></li>
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
</body>
</html>
