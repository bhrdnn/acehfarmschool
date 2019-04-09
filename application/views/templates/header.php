<!DOCTYPE html>
<html>
<head>
	<title>Aceh Farm School</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/aos.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/responsive.css');?>">
	<!-- bootsrap -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
		
</head>
<body>
<header>
		<div class="navscroll container">
			<div class="row">
				<div class="col-md-6">
					<div class="logo">
						<a href="#"><img src="<?= base_url('assets/img/afslogo.png');?>"></a>
					</div>
				</div>
				<div class="col-md-6">
					<nav class="desktop">
						<ul>
							<a href="<?= base_url('beranda');?>"><li>Beranda</li></a>
							<a href="<?= base_url('tentang');?>"><li>Tentang</li></a>
							<a href="<?= base_url('galeri');?>"><li>Galeri</li></a>
							<a href="#"><li>Produk</li></a>
						</ul>
					</nav>

					<nav class="mobile">
						<div class="btn-hamburger">
							<i class="fa fa-bars"></i>
							<i class="fa fa-times"></i>	
						</div>

						<ul>
							<a href="<?= base_url('beranda');?>"><li>Beranda</li></a>
							<a href="<?= base_url('tentang');?>"><li>Tentang</li></a>
							<a href="<?= base_url('galeri');?>"><li>Galeri</li></a>
							<a href="#"><li>Produk</li></a>
						</ul>
					</nav>					
				</div>
			</div>
		</div>
		</header>