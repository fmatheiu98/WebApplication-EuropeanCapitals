<?php
session_start();

//$_SESSION['admin'] = 0;
/*if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "Trebuie sa fii logat.";
    header('location: /login/login.php');
}
*/
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Capitale europene</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/slider.css" />
		<!-- GTranslate: https://gtranslate.io/ -->
		
<style type="text/css">

a.gflag {vertical-align:middle;font-size:24px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/24.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/24a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}

</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'ro',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>

		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">

					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.php">Capitale europene</a></h1>								
							</div>

						<!-- Nav -->
						
							<nav id="nav">

								<ul>

									<li class="current"><a href="index.php">Prima pagină</a></li>
									<li>
										<a href="#">Capitale</a>
										<?php include('./page_add/print_pages.php'); ?>
										
									</li>
									<li><a href="galerie.php">Galerie</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="/login/login.php">Login</a></li>

                                    <?php  ob_start(); if (isset($_SESSION['username'])) : ?>
                                        <li style="font-size: 80%">Bine ai venit, <?php echo $_SESSION['username']; ?></li>
                                        <li style="font-size: 90%"> <a href="index.php?logout='1'" style="color: white">Log out</a> </li>
									<?php endif;  ?>
								
									<a href="#" onclick="doGTranslate('ro|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="English" /></a><a href="#" onclick="doGTranslate('ro|ro');return false;" title="Romanian" class="gflag nturl" style="background-position:-400px -200px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="Romanian" /></a>
									
								</ul>

							</nav>


					</div>

				</div>

			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">Introducere</div>
					<section id="intro" class="container">
						
						<p class="style2">
							Cele mai frumoase capitale europene, care trebuie vizitate cel puțin o dată în viață
						</p>
						<ul class="actions">
							<li><a href="bucuresti.php" class="button style3 big">Detalii</a></li>
							<?php
									if(isset($_SESSION['username']))
    									if ($_SESSION['admin'])
    									{
        									echo "<li name='adaugare_pagini'><a href='/page_add/adauga_pagina.php' class='button style3 big'>Adauga pagina noua</a> </li>";
										}
									?>
						</ul>
					</section>
				</div>

				 <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width slides/quotes -->
<div class="mySlides">
<img src="images/p1.jpg" width ="200px" height ="300px">
  <p>
  	Concert: Rock the Opera<br>
	Loc: Sala Palatului, București<br>
	Data/ora de începere: luni, 2 decembrie 2019 (20:00) </p>
	
</div>

<div class="mySlides">
<img src="images/p2.jpg" width="400px" height="300px">
  <p>Targ de craciun 2019-2020<br>
	  Winter Wonderland, Hyde Park<br>
	  Londra : 17 noiembrie – 1 ianuarie</p>
</div>

<div class="mySlides">
<img src="images/p3.jpg" width="400px" height="300px">
<p>	Anul nou in Paris<br>
	  Bulevardul Champs-Elysees<br>
	  Paris : 31 decembrie 2019 - 1 ianuarie 2020</p>
</div>

<!-- Next/prev buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> 

			<!-- Main -->
				<div class="wrapper style2">
					
					<div id="main" class="container">

						<!-- Features -->
							<section id="features">
								<div class="feature-list">
									<div class="row">
										<h3>Acest site vă prezintă o selecție cu cele mai frumoase capitale europene, alături de câteva obiective turistice semnificative pentru fiecare în parte.</h3>
									</div>	
								</div>
							</section>

					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">Câteva exemple</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.png" alt="" /></a>
									<h3><a href="#">București</a></h3>
									<p>Bucureștiul este capitala României, centrul cultural și economic al întregii țări, a fost înființat cu mai mult de cinci sute de ani în urmă.</p>
									<ul class="actions">
										<li><a href="bucuresti.php" class="button style1">Detalii</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="#">Londra</a></h3>
									<p>Londra este capitala Angliei și a Regatului Unit. Este cel mai important centru politic, financiar, cultural și artistic al Regatului Unit, și unul dintre cele mai importante orașe ale lumii.</p>
									<ul class="actions">
										<li><a href="londra.php" class="button style1">Detalii</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Roma</a></h3>
									<p>Roma este capitala Italiei și unul dintre cele mai încărcate de istorie orase ale Europei, este poziționată în provincia Lazio din Italia.</p>
									<ul class="actions">
										<li><a href="roma.php" class="button style1">Detalii</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>
				
				<div id="footer-wrapper" class="wrapper">
					<div class="title">Secțiune review-uri</div>
					<div id="footer" class="container">
						<div class="row 150%">
							<div class="6u 12u(mobile)">

								<!-- Contact Form -->
									<section>
								
										<form method="post" action="#">
											
											<div class="row 50%">
												<div class="12u">
													<input type="text" id="contact-message" class="style2" placeholder="Nume..." name="nume_persoana"/>
													<textarea name="message" id="contact-message" placeholder="Scrie un review..." rows="4"></textarea>					
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Trimite Review" name = "add_review" /></li>
														<li><input type="reset" class="style2" value="Resetare"/></li>
													</ul>
												</div>
											</div>
										</form>
	
									

									</section>
									<?php include('review1.php');?>
							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
								<section class="feature-list small">
									<div class="row">
										<header class="style1">
										</header>
									</div>
								</section>

							</div>
						</div>
					</div>
				</div>

		</div>

		

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

			<script type="text/javascript">
			var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 
		</script>
	</body>
</html>