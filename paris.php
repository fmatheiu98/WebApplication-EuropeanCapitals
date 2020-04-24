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
					<div class="title">Paris</div>
					<div id="main" class="container">
						<div class="row 150%">
							<div class="8u 12u(mobile)">

									<div id="content">
										<article class="box post">
											
		<p>Paris este capitala și cel mai mare oraș din Franța. Orașul este traversat de fluviul Sena, 
			în nordul Franței, în mijlocul regiunii Île-de-France (cunoscută și ca regiunea Paris). 
			Orașul în limitele sale administrative (cele 20 de arondismente) este în mare parte 
			neschimbat din anul 1860, având o populație de 2.211.297 locuitori.</p>	
								
	<img src="images/galerie/20.jpg" width="350" align="right" style="margin-left:10px;">

		<p>Parisul este un oraș viu, care vibrează, centru economic și cultural al Franței. 
			Creativitatea specifică prezentului este vizibilă în clădirile noi și interesante, în 
			sculptură și pictură modernă ce stau alături de comorile trecutului.</p>

		<p>Tot în Paris găsești și obiective turistice de neegalat, precum palate decorate în 
			stil renascentist al secolului al XVII-lea ce emană o incredibilă bogăție, dacă îți 
			continui plimbarea prin Paris o să găsești și monumente de inspirație clasică ale 
			lui Napoleon.</p>

			<img src="images/galerie/102.jpg" width="350" align="left" style="margin-left:0;">
		<p> Turnul Eiffel - deși arhitectul Gustave Eiffel l-a construit doar pentru expoziția 
			temporară din 1889 de la Târgul Mondial, nimeni nu și-ar putea imagina Parisul fără 
			acesta atracție turistică emblematică. Până la etajul al doilea poți urcă cu liftul 
			sau poți alege să urci cele 704 de trepte. La etajul al doilea vei schimba liftul 
			pentru a urca până în vârful turnului. La etajul unu și doi te poți relaxa într-unul 
			din cele două baruri sau la cel cu macaroons.</p>

			<img src="images/galerie/21.jpg" width="350" align="right" style="margin-left:10px;">
		
			<p>Arcul de Triumf este un obiectiv turistic pe care îl puteți admira și fotografia la 
			capătul plimbării pe Champs-Élysées, în Place de l’Étoile – impunător, monumentul 
			amintește tuturor de gloria armatelor franceze și constituie, la fel că și în cazul 
			Arcului de Triumf românesc, reperul defilării trupelor de Ziua Franței, la fiecare 
			14 Iulie.</p>

			<p>De-a lungul veacurilor, orașul a găzduit un șir lung de artiști. Regii și nobilii 
			au fost patronii artelor: dramaturgia, muzică, actorii. Și astăzi, capitală oferă 
			nenumărate opțiuni de divertisment: teatre, concerte rock, cluburi de noapte 
			și baruri - deși simplă hoinăreală pe străzile unui oraș atât de viu poate să fie 
			suficient de plăcută.</p>

			<p>Cu zeci de obiective și atracții turistice: muzee și galerii de artă, 
			parcuri frumoase, uimitoare magazine pîine de cele mai renumite creații de modă 
			ale lumii, precum și Basilique du Sacre-Coeur irezistibilele cafenele și restaurante, 
			vizitatorul Parisului este ocupat în fiecare clipă.</p>


										
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