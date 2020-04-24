<?php 

session_start();

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
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
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
	</head>
	<body class="right-sidebar">
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
                                    <?php  if (isset($_SESSION['username'])) : ?>
                                        <li style="font-size: 80%">Bine ai venit, <?php echo $_SESSION['username']; ?></li>
                                        <li style="font-size: 80%"> <a href="index.php?logout='1'" style="color: darkturquoise">Log out</a> </li>
									<?php endif ?>
									<a href="#" onclick="doGTranslate('ro|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="English" /></a><a href="#" onclick="doGTranslate('ro|ro');return false;" title="Romanian" class="gflag nturl" style="background-position:-400px -200px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="Romanian" /></a>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">București</div>
					<div id="main" class="container">
						<div class="row 150%">
							<div class="8u 12u(mobile)">

									<div id="content">
										<article class="box post">
											
			
	 	<p>Capitala Romaniei, centrul cultural si economic al intregii tari, a fost infiintat cu 
			 mai mult de cinci sute de ani in urma si este cel mai potrivit punct de plecare pentru 
			 un tur al Romaniei. In anii '30, arhitectura elegantă și atmosfera sa urbană i-au adus 
			 supranumele de „Micul Paris”.</p>
		 <img src="images/galerie/24.jpg" width="500" align="right" style="margin-left:10px;">
		 
		<p>Aici se găsește chiar și un Arc de Triumf, pe impresionantă Șosea Kisseleff care este mai 
			lungă decât Champs Elyses și pe care, în timpul primăverii, puteți admira splendoarea copacilor 
			înfloriți.</p>

		<p>În ciuda planului extins de reconstrucție din anii '80, Bucureștiul rămâne un oraș al 
			parcurilor, plăcut, plin de verdeață, cu cafenele deschise pe trotuare în timpul verii
			 și bărci de agrement pe lacurile și râurile care îl străbat.</p>

		<p>Este ușor să te descurci în București. Rețeaua de metrou se întinde pe toată suprafață 
			orașului, iar tariful pentru o călătorie este unic. Principalele bulevarde străbat orașul 
			pe direcția nord-sud, de la Arcul de Triumf până în Centrul Civic, și sunt intersectate de 
			altele care se întind de la est la vest. Calea Victoriei, care se află în continuarea 
			Șoselei Kisseleff, este locul preferat de locuitorii capitalei pentru plimbări în serile de vară.</p>

		<p>Aici veți găși clădiri publice impunătoare, cum ar fi Muzeul Național de Istorie și 
			Palatul Poștei, iar spre capătul sudic al acestui bulevard se află parcul Cișmigiu. 
			Bulevardul Magheru este paralel cu Calea Victoriei, iar pe el se află agenții de turism 
			și ale companiilor aeriene, cinematografe și hoteluri.</p>

			<img src="images/galerie/26.jpg" width="500" align="right" style="margin-left:10px;">

		<p>Una dintre cele mai interesante și mai valoroase clădiri din București este Palatul Parlamentului. 
			Construit în stil brâncovenesc, cu influențe renascentiste, baroce și germanice, acest edificiu 
			grandios te va impresiona prin stilul său arhitectonic și cele peste 1000 de încăperi pe 
			care le include.</p>
		<p>Intitulat și Casa Poporului, această clădire este în realitate un simbol al extravaganței 
			în interior datorită mobilierului de lemn masiv, a lustrelor de cristal, de dimensiuni 
			impresionante, a coloanelor de marmură imense și a celorlalte elemente de design interior 
			alese cu grijă pentru fiecare încăpere.</p>
		
		<img src="images/galerie/25.jpg" width="500" align="right" style="margin-left:10px;">
		<p>Centrul Vechi al capitalei este una dintre cele mai cochete zone din oraș. Vei fi surprins 
			să descoperi multitudinea de clădiri construite în stil neobaroc și neoclasic, care găzduiesc 
			la parter locații comerciale, care animă întreaga zonă. Turiștii dornici să se relaxeze 
			la terasele ademenitoare din zonă, pe parcursul periplului lor turistic prin capitala României, 
			vor fi plăcut impresionate de Centrul Istoric al capitalei. Acolo se organizează în mod 
			frecvent festivaluri, evenimente culturale și târguri de artă medievală, pe care trebuie 
			să le treci pe lista ta de activități destinate sejurului petrecut în București.</p>
										
										</article>
									</div>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="box">
											<header>
												<h2>Meniu</h2>
											</header>
											<?php include('./page_add/print_pages.php'); ?>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
			
			
			
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