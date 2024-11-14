<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WH HomeSquare</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700|Playfair+Display:700|Raleway:700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Courgette' re='stylesheet'>
<link rel="stylesheet" type="text/css" href="styles/styleHome.css">
<link rel="stylesheet" type="text/css" href="styles/styleAll.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
	<div class="shadow"></div>
		<div id="navbar">
			<div class="hold-nav" id="hold-nav">
				<a href="index.php" style="text-decoration: none; color: white;"><div class="logo">W<b>H</b></div></a>
				<div class="nav-bar">
					<a href="index.php" class="nav-link active">Home</a>
				</div>
				<div class="dropdown">
				  <button class="dropbtn"><i class="fa fa-bars"></i></button>
				  <div class="dropdown-content">
				  <a href="index.php">Home</a>
				  <a href="sites.php">Sites</a>
				  <a href="aboutUs.php">About</a>
				  </div>
				</div>
			</div>
		</div>
	<div class="background-hero" id="background-hero">
		<section class="home-hero" id="home-hero">	
			<div>
				<h1 class="title1">Pahlawan Indonesia</h1>
				<p>Website Kelompok PKN Bintang Mandiri dari Brian, Nicho, dan Nano</p>
			</div>
		</section>
	</div>
	<!-- Add content sections below as needed -->
	<section class="intro-section" id="intro-section">
		<div class="container">
			<div class="column-left">
				<h1>Selamat Datang</h1>
				<p>Selamat datang di Pahlawan Indonesia, tempat di mana kami mengabadikan dan memperingati jasa-jasa para pahlawan bangsa. Melalui situs ini, kami mengajak Anda untuk menjelajahi kisah-kisah inspiratif perjuangan mereka yang telah memberikan pengabdian tak terhingga bagi Indonesia. Temukanlah ragam informasi, foto, dan cerita menarik yang memperkaya pengetahuan tentang warisan kebesaran jiwa pahlawan kita. Mari bersama-sama meresapi semangat kepahlawanan yang mengukir sejarah bangsa, memperkaya identitas kita, dan menginspirasi generasi-generasi mendatang. Selamat menikmati perjalanan mengagumkan dalam mengenang dan menghormati para pahlawan Indonesia. Terima kasih telah bergabung dengan kami!</p>
			</div>
			<div class="column-right">
				<div><img src="img/pahlawan/soekarno.jpg" loading="lazy"></div>
			</div>
		</div>
	</section>
	<section class="parallex-section">
		<div class="parallex-bg" id="parallex-bg">
			<h1>Pahlawan-pahlawan unggulan</h1>
		</div>
	</section>
	<section class="content-section">
		<div class="container">
			<div class="row">
				<div class="row-container">
						<div class="col">
							<div class="img-zoom">
								<a href="sites.php"> <img src="img/pahlawan/soekarno3.jpeg" loading="lazy"></a>
							</div>					
							<div class="text text-feat">
								<h4><a class="title hover-color" href="sites.php">Ir. Soekarno</a></h4>
								<p>Ir. Soekarno, Presiden pertama Republik Indonesia, memimpin perjuangan kemerdekaan dengan deklarasi 17 Agustus 1945.</p>
							</div>
						</div>
						<div class="col">
							<div class="img-zoom">
								<a href="sites.php"><img src="img/pahlawan/kartini3.jpeg" loading="lazy"></a>
							</div>	
							<div class="text text-feat">
								<h4><a class="title hover-color" href="sites.php">Kartini</a></h4>
								<p>Kartini, pahlawan emansipasi wanita Indonesia, berjuang untuk kesetaraan gender dan pendidikan bagi perempuan.</p>
							</div>
						</div>
						<div class="col">
							<div class="img-zoom">
								<a href="sites.php"><img src="img/pahlawan/tengkuumar.png" loading="lazy"></a>
							</div>	
							<div class="text text-feat">
								<h4><a class="title hover-color" href="sites.php">Tengku Umar</a></h4>
								<p>Tengku Umar, pejuang kemerdekaan Indonesia dari Sumatera Barat, memimpin perlawanan melawan penjajah Belanda di Minangkabau.</p>
							</div>
						</div>
						<div class="col">
							<div class="img-zoom">
								<a href="sites.php"><img src="img/pahlawan/cutnyakdien.jpeg" loading="lazy"></a>
							</div>	
							<div class="text text-feat">
								<h4><a class="title hover-color" href="sites.php">Cut Nyak Dien</a></h4>
								<p>Cut Nyak Dien, pahlawan nasional Indonesia, memimpin perlawanan sengit terhadap penjajah Belanda di wilayah Aceh.</p>
							</div>
						</div>
					</div>
		</div>
	</section>
	<section class="continent-section">
			<button onclick="plusSlides(-1, 'continent');" class="prev" style="top: 50% !important;">&lt;</button>
		<div class="titlecontinent"><h1>Pahlawan berdasarkan asal</h1></div>
		<div class="container-titlecontinent">
		    <div class="container-continent">
					<div class="continent-left">
			            <div class="continent-title">Jawa</div>
			            <div id="continent-title" class="continent-site-title">Loading...</div>
			            <div id="continent-text" class="continent-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis, lacinia erat non, viverra odio.</div>
			            <div class="continent-cta">
			            </div>
			        </div>
			        <div class="continent-right">
			            <div class="img-zoom img-ab">
								<a href="sites.php"><img src="img/places/gwoc.jpg" id="continent-img" loading="lazy"></a>
						</div>	
			            <div class="continent-buttons">
			                <button onclick="plusSlides(-1, 'continent-sites', 0);" class="button-color">&lt;</button>
			                <button onclick="plusSlides(1, 'continent-sites', 0);" class="button-color">&gt;</button>
			            </div>
			        </div>
		    </div>
			<div class="container-continent">
				<div class="continent-left">
		            <div class="continent-title">Sumatera</div>
		            <div id="continent-title" class="continent-site-title">Loading...</div>
		            <div id="continent-text" class="continent-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis, lacinia erat non, viverra odio.</div>
		            <div class="continent-cta">
		            </div>
		        </div>
		        <div class="continent-right">
		            <div class="img-zoom img-ab">
							<a href="sites.php"><img src="img/places/gwoc.jpg" id="continent-img" loading="lazy"></a>
					</div>	
		            <div class="continent-buttons">
		                <button onclick="plusSlides(-1, 'continent-sites', 1);" class="button-color">&lt;</button>
		                <button onclick="plusSlides(1, 'continent-sites', 1);" class="button-color">&gt;</button>
		            </div>
		        </div>
		    </div>
		    <div class="container-continent">
				<div class="continent-left">
		            <div class="continent-title">Sulawesi</div>
		            <div id="continent-title" class="continent-site-title">Loading...</div>
		            <div id="continent-text" class="continent-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis, lacinia erat non, viverra odio.</div>
		            <div class="continent-cta">
		                <a href="sites.php"><button class="button-color">Learn More</button></a>
		            </div>
		        </div>
		        <div class="continent-right">
		            <div class="img-zoom img-ab">
							<a href="sites.php"><img src="img/places/gwoc.jpg" id="continent-img" loading="lazy"></a>
					</div>	
		            <div class="continent-buttons">
		                <button onclick="plusSlides(-1, 'continent-sites', 2);" class="button-color">&lt;</button>
		                <button onclick="plusSlides(1, 'continent-sites', 2);" class="button-color">&gt;</button>
		            </div>
		        </div>
		    </div>
		</div>
		    <button onclick="plusSlides(1, 'continent');" class="next" style="top: 50% !important;">&gt;</button>
	</section>
</body>
<?php include 'footer.html'; ?>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>
