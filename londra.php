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
					<div class="title">Londra</div>
					<div id="main" class="container">
						<div class="row 150%">
							<div class="8u 12u(mobile)">

									<div id="content">
										<article class="box post">
		<p>Obiectivele turistice din Londra sunt cu adevărat deosebite, numeroase și extrem de interesante, 
			și pot reprezenta motivul pentru care turiștii ar alege să își petreacă câteva zile în capitală 
			Marii Britanii.</p>
			<img src="images/galerie/1.jpg" width="500" align="right" style="margin-left:10px;">

		<p>Londra este un oraș scump și intrarea la anumite obiective turistice este și ea destul de 
			costisitoare însă există și obiective turistice la care intrarea este gratuită. De la 
			obiective turistice moderne cum ar fi Lodon Eye, celebra roată din Londra, până la atracții 
			foarte vechi cum ar fi Turnul Londrei, capitală Regatului Unit are o oferta de atracții 
			care poate ține ocupat cei mai pretențioși turiști. În funcție de timpul disponibil, 
			atracțiile turistice din Londra pot fi vizitate la pas sau puteți folosi rețeaua de 
			transport extrem de bine pusă la punct pentru a reuși să vizitați obiectivele turistice dorite.</p>


		<p>Londra este una dintre capitalele istorice ce abundă în obiective turistice. Londra merită 
			vizitată în orice perioada a anului deoarece este un oraș plin de istorie și de atracții 
			turistice. Mai jos va prezentăm o serie de obiective turistice din Londra pe care le-am 
			considerat mai importante, dar pe lângă acestea există multe altele ce merită văzute și 
			explorate. Va lăsăm să alegeți ce merită și ce nu merită vizitat în capitală Regatului 
			Unit din lista de atracții de mai jos.</p>

			<img src="images/galerie/2.jpg" width="300" align="left" style="margin:10px;">
		<p>London Eye este un simbol al capitalei Marii Britanii și un obiectiv foarte important 
			vizitat de multe sute de mii de turiști anual. Deși este o atracție relativ nouă, a reușit 
			în scurt timp să devină foarte populară atât printre localnici cât și printre turiștii 
			străini care nu ratează ocazia unor imagini panoramice deosebite. London Eye sau Roată 
			Londrei are o serie de cifre impresionante nu numai legate de numărul de vizitatori ci 
			și de dimensiunile sale, materialele folosite și multe alte aspecte. London Eye este un 
			"must see" atunci când vizitați Londra</p>
		
		
		
		<img src="images/galerie/3.jpg" width="300" align="right" style=" margin:10px;">

		<p>Big Ben este unul dintre cele mai importante obiective turistice în Londra, devenind aproape 
			o emblemă a capitalei britanice. Big Ben arată de-a dreptul încântător noaptea când fațada 
			și cesurile de pe fiecare față sunt iluminate. Atunci când Parlamentul se află în sesiune o 
			lumina strălucește peste fațada ceasului. Cadranele ceasului au o suprafață de peste doi 
			metri pătrați, iar minutarul are peste 4 metri. Big Ben are un pendul uriaș care este reglat 
			de un sac de monezi și este un ceas excelent care s-a oprit foarte rar.</p>
		
		<img src="images/galerie/101.jpg" width="300" align="left" style=" margin:10px;">

		<p>British Museum este cel mai vechi și unul dintre cele mai mari muzee din lume. Sunt puține 
			locuri unde pot fi admirate atâtea comori ale tuturor timpurilor sub același acoperiș. În mod 
			normal British Museum este printre cele mai vizitate obiective turistice în Londra. Turiștii 
			vor fi fascinați de mumiile egiptene sau vor fi inspirați de superbele expoziții de desene 
			și schițe care se schimbă de câteva ori pe an. </p>

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