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
					<div class="title">Berlin</div>
					<div id="main" class="container">
						<div class="row 150%">
							<div class="8u 12u(mobile)">

									<div id="content">
										<article class="box post">
											
											
	
		<p>Berlin este un oraș cu multe obiective turistice ce sunt vizitate zilnic de foarte mulți localnici și 
		turiști. Berlinul nu are doar un centru în care să fie concentrate toate atracțiile turistice ci în Berlin 
		acestea sunt răspândite prin tot orașul. Un adevărat centrul istoric al Berlinului ar putea fi în partea de 
		est a orașului. Probabil obiectivul turistic cel mai emblematic este Poartă Brandenburg, locul unde s-au 
		desfășurat toate manifestările de după căderea zidului Berlinului din 1989. Și Alexanderplatz este o altă 
		atracție, o piață plină de viață unde există și un turn TV înalt de 365 de metri, cea mai înalta structura 
		din Berlin. Există multe obiective turistice, muzee și atracții istorice ce pot fi vizitate în Berlin într-o 
		vacanță și datorită faptului că sunt destul de dispersate și destul de numeroase, este nevoie de mai multe 
		zile pentru a putea ajunge să cunoașteți cu adevărat acest oraș emblematic.</p>

		<img src="images/galerie/5.jpg" width="400" align="right" style="margin-left:10px;">

		<p>Brandenburger Tor, Poartă Brandenburg, este o poartă monumentală construită în secolul al 18-lea că simbol 
		al păcii. În timpul Războiului Rece, când poartă se află chiar pe granița dintre Est și Vest, a devenit un 
		simbol al unui oraș divizat. De la Căderea Zidului Berlinului, Poartă Brandenburg a devenit simbolul Berlinului 
		reunificat. </p>

		<p>Zidul Berlinului, care a despărțit orașul în două părți, estică și vestică, a fost simbolul Războiului 
		Rece. Construit de guvernul Republicii Democrate Germane pentru a împiedică pe est germani să fugă spre 
		Germania Federală, marea parte a acestuia a fost demolată de când granița dintre est și vest a fost deschisă 
		în 1989. După al doilea război mondial, Germania a fost împărțită în patru zone: una americană, britanică, 
		franceză și sovietică. </p>

		<img src="images/galerie/18.jpg" width="400" align="left" style="margin-left: 50px; margin-right:10px;">

		<p>La începutul secolului al 19-lea, Alexanderplatz era una dintre cele mai tumultoase piețe din întregul 
		Berlin. Încă din Evul Mediu, Alexanderplatz era centrul orașului iar de la Reunificarea Germaniei, piață a 
		redevenit un punct de interes principal și un obiectiv turistic important. În trecutul îndepărtat piață 
		era numită Ochsenmarkt sau Piață de tauri, dar în 1805, după o vizită a Țarului Rusiei Alexandru I, a fost 
		redenumită Alexanderplatz. </p>

		<img src="images/galerie/19.jpg" width="300" align="right" style="margin-left:10px;">

		<p>Berliner Dom este o catedrala în stil baroc construită între 1894 și 1905. Se află situată pe o insula 
		de pe răul Spree, cunoscută sub numele de Insula Muzeelor. Clădirea actuală este a treia biserica construită 
		în această locație. Prima biserica a fost construită aici în 1465. Această clădire oarecum modestă a servit 
		mai târziu drept biserica de curte a familiei Hohenzollern.</p>

										
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