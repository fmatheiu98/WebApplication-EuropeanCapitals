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
					<div class="title">Viena</div>
					<div id="main" class="container">
						<div class="row 150%">
							<div class="8u 12u(mobile)">

									<div id="content">
										<article class="box post">
											
				  
		<img src="images/galerie/33.jpg" width="500" align="right" style="margin-left:10px;">
		<p>Viena este un oraș tipic european, asemănător marilor orașe europene precum Paris, Roma, Londra, Barcelona 
		sau Milano dar spre deosebire de acestea, este foarte compact și ușor de vizitat. Marea majoritate a 
		atracțiilor prezente în secțiunea de obiective turistice Viena de pe site-ul nostru se găsesc în centrul 
		orașului, fiind destul de ușor de vizitat chiar pe jos sau folosind metroul pentru câteva stații. În capitala 
		Austriei pot fi văzute o serie întreagă de muzee, biserici și alte obiective turistice de mare interes. 
		Viena abundă de obiective și atracții ce fac că turiștii să asalteze cu miile capitală Austriei. Mai jos va 
		prezentăm o listă a acestor atracții turistice ce trebuie văzute într-o vacanță în Viena.</p>

		<p>Palatul Schonbrunn trebuia să fie Versailles-ul Imperiului Austriac însă, în anul 1695 atunci când Fischer 
		von Erlach a proiectat palatul, costurile pentru ridicarea să erau prea mari. Astfel, palatul a fost conceput 
		inițial mai mult că reședința de vara a Habsburgilor dar începând cu Maria Tereza (1717-1780) a început și 
		epoca de aur a Habsburgilor, ea alegându-și că reședința Palatul Schonbrunn. Palatul Belvedere se află în 
		mijlocul unui parc splendid. Palatul a fost construit pentru Prințul Eugen de Savoia, de către J.L. von 
		Hildebrandt, un foarte cunoscut arhitect baroc al perioadei respective. Belvedere înseamnă un loc din care 
		se poate vedea frumusețea iar Palatul Belvedere oferă o priveliște minunată a orașului vechi din grădinile 
		sale. Deși părinții săi erau născuți în Italia, Prințul Eugen era francez și cunoștea foarte bine Castelul 
		Versailles.  </p>
		<img src="images/galerie/34.jpg" width="500" align="right" style="margin-left:10px;">

		<p>Catedrala Sf Ștefan, obiectiv turistic important, a supraviețuit multor războaie și a devenit simbolul 
		libertății Vienei. Clădirea în stil gotic a fost construită în anul 1147 dar acoperișul sau din țiglă sub 
		formă de diamant a fost adăugat în anul 1952. Catedrala Sf Ștefan a fost subiectul multor cărți, poze și 
		studii. Unicitatea catedralei precum și multitudinea de detalii fac din catedrala Sf Ștefan, o comoară a 
		arhitecturii. Altarele, arcadele, turnurile, imaginile: fiecare detaliu are scopul și istoria sa. </p>

		<img src="images/galerie/32.jpg" width="500" align="right" style="margin-left:10px;">
		<p>Opera de Stat din Viena (Wiener Staatsoper) este una dintre cele mai importante opere din lume, unde 
		sunt prezentate o varietate de specatacole de opera și balet la cel mai înalt nivel artistic. Opera este 
		situată districtul întâi al Vienei, la capătul de sud al Karntnerstrasse. Clădirea Operei din Viena este un 
		obiectiv turistic din punct de vedere artistic dar și arhitectural. A fost construită între 1861 și 1869 de 
		către arhitecții August von Sicardsburg and Eduard van der Null.  </p>

		<p>Michaelerplatz este una dintre cele mai celebre piețe din Viena în principal datorită proximității sale 
		de Hofburg, Palatul Imperial din Viena și a altor obiective turistice importante din capitală Austriei. 
		Michaelerplatz este dominată de impresionantă poartă neo-barocă a Palatului Hofburg. În partea opusă Palatului 
		Hofburg se găsește una dintre primele clădiri moderne ale Vienei, Looshaus. Cea mai veche clădire din 
		Michaelerplatz este Michaelerkirche, biserica ce a servit vreme îndelungată drept biserica a împăraților 
		austro-ungari. </p>


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