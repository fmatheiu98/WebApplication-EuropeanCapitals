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
					<div class="title">Bruxelles</div>
					<div id="main" class="container">
						<div class="row 150%">
							<div class="8u 12u(mobile)">

									<div id="content">
										<article class="box post">
											
											
		    
<p style="text-align: justify;">Bruxelles (olandeză: Brussel, franceză: Bruxelles, germană: Brüssel) 
este capitala Belgiei și a Regiunii autonome Bruxelles, dar și una dintre cele trei capitale ale Europei 
(împreună cu Luxemburg și Strasburg). În 2000, Bruxelles a fost declarat capitală culturală a Europei.</p>

<img src="images/galerie/46.jpg" width="400" align="right" style="margin-left:10px;">

<p style="text-align: justify;">
Bruxelles are o populație de circa 140,000 de locuitori și este una dintre cele 19 municipalități ale 
Regiunii Bruxelles, care numără peste un milion de locuitori. Regiunea Bruxelles este o provincie a Belgiei, 
alături de Regiunea flamandă și Valonia. La Bruxelles se găsesc, de asemenea, toate instituțiile importante ale 
Flandrei (parlamentul, guvernul și restul administrației). Tot la Bruxelles se află și două dintre principalele 
instituții europene: Comisia Europeană și Consiliul Uniunii Europene, în timp ce a treia mare instituție 
europeană, Parlamentul, are aici o camera parlamentară, unde se întrunesc comitetele și se țin ședințe. 
La Bruxelles se găsesc sediul NATO (Organizația Tratatului Atlanticului de Nord), Uniunea Europei de Vest 
(WEU) și EUROCONTROL, Organizația Europeană pentru Siguranță Traficului Aerian. 

</p>

<img src="images/galerie/47.jpg" width="300" align="left" style="margin-right: 10px; ">

<p style="text-align: justify;">
Din punct de vedere al limbii vorbite, Belgia se împarte în două: regiunea nordică, unde predomină olandeză și 
zona de sud, unde se vorbește franceză. La Bruxelles, deși majoritatea populației vorbește franceză, sunt oficiale 
amandoua limbile. Inițial, în zona Bruxelles-ului se vorbeau dialecte brabantice ale limbii olandeze, însă în oraș 
au coexistat, că limbi oficiale, franceză și olandeză. În secolele XIX și XX, că urmare a dezvoltării literaturii, 
dialectele au fost treptat înlocuite de limba literară, în special franceză, iar în prezent dialectele sunt tot 
mai puțin întâlnite. 
</p>

<p style="text-align: justify;">
Atomium este situat chiar lângă Parcul Mini-Europa (parc ce are clădiri în minatura ale unor obiective 
turistice din întreagă Europa la o scala de 1:25), chiar lângă Stadionul Regelui Baudouin. Este o structura 
care reprezintă o unitate a unui cristal de fier. Acest obiectiv turistic din Bruxelles are nouă sfere 
din oțel (inițial au fost făcute din aluminiu) legate între ele prin tunele, de-a lungul celor 12 margini 
ale cubului. Întraga structura are o înălțime de 102 metri, iar sferele au diametrul de 18 metri. Stabilitatea 
sa este asigurată de 3 perechi de stâlpi de susținere. </p>


										
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