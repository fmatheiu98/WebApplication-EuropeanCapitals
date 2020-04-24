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
					<div class="title">Roma</div>
					<div id="main" class="container">
						<div class="row 150%">
							<div class="8u 12u(mobile)">

									<div id="content">
										<article class="box post">
											
		
<p style="text-align: justify;">	
Roma este capitala Italiei și, cu 2,8 milioane de locuitori și 1.285,3 kmp, este, de asemenea, 
al patrulea oraș că mărime și număr de locuitori din Uniunea Europeană. Roma este deseori 
menționată ca "Orașul Etern" sau "Cetatea Eternă" de poeții și scriitorii antici.</p>

<img src="images/galerie/100.jpg" width="450" align="right" style="margin-left:10px;">

<p style="text-align: justify;">Istoria Romei începe, potrivit românilor, în anul 753 i.Hr și se întinde 
pe mai multe mii de ani. Reprezentantă onorifică a peste 2500 de ani de istorie, monumentele, 
muzeele, galeriile și vechile biserici fac din citedelă o adevărată casă
 a artei, arhitecturii și culturii. În același timp, este o capitală 
modernă, înfloritoare, cu o viață socială antrenantă. Este, mai mult 
decât orice, un amestec de antic, medieval și modern, și așa cum Roma nu
 a fost construită într-o zi, nici voi nu o veți putea explora în doar 
24 de ore.
</p>



<p style="text-align: justify;">Roma este, fără îndoială, unul dintre 
cele mai frumoase orașe din lume. În fiecare an, milioane de turiști vin
 de pretutindeni pentru a admira comorile de artă, capodoperele române 
și arhitectură. Cele mai multe dintre obiectivele turistice din Roma
 pot fi vizitate mergând pe jos. Însă, pentru a va deplasa mai rapid, 
puteți apela la metrou - ieftin și foarte eficient - sau la rețeaua de 
autobuze. Roma de astăzi este una dintre destinațiile turistice cele mai
 importante ale lumii, pentru dsescoperirile arheologice, precum și 
pentru farmecul tradițiilor sale unice, pentru frumusețea vederilor sale
 panoramice, precum și măreția magnificelor sale parcuri. </p>

 <img src="images/galerie/17.jpg" width="500" align="right" style="margin-left:10px;">

<p style="text-align: justify;">Printre cele mai importante resurse ale 
sale se numără mai multe muzee, (Muzeele Capitoline, Muzeele 
Vaticanului, Galleria Borghese, muzeele dedicate artei moderne și 
contemporane, etc.), apeductele, fântânile, bisericile, palatele, 
clădirile istorice, monumentele. Forumul și Colosseo (Colosseum)
 ocupă un loc deosebit în centrul istoric, iar Vaticanul, dominat de 
Piață Sfântul Petru, Bazilica și muzeele Vaticanului, reprezintă una 
dintre principalele atracții ale orașului, atât din punct de vedere 
istoric, cât și că centru administrativ al bisericii catolice. Fostele 
reședințe aristocratice sunt în mare parte astăzi birouri, muzee sau 
galerii. Spre exemplu, Quirinale, odinioară reședința papală, este acum 
Palatul Președinției și un loc preferat pentru organizarea concertelor. 
Piețele publice monumentale, precum Piazza di Spagna, Piazza Navona sau 
Piazza Venezia, reprezintă locurile cele mai bune în care să faceți un 
popas pentru a va trage sufletul, în mijlocul clădirilor magnifice și al
 elegantelor cafenele și restaurante.</p>

<p style="text-align: justify;">Roma este un centru arheologic major și 
unul din centrele mondiale principale ale cercetării arheologice. În 
oraș există numeroase institute culturale și de cercetare - cum ar fi 
Academia din Roma și Institutul Suedez de la Roma. Deține numeroase 
situri străvechi, inclusiv Forumul Român,
 Piață lui Traian, Forumul lui Traian, Colosseum, Pantheon, - pentru a 
numi doar câteva. Colosseum, fără îndoială, unul dintre siturile 
arheologice cele mai reprezentative, este considerat a fi o minune a 
lumii.</p>

<img src="images/galerie/16.jpg" width="500" align="right" style="margin-left:10px;">

<p style="text-align: justify;">
Roma dispune de o colecție vastă și 
impresionantă de artă, sculptură, fântâni, mozaicuri, fresce, picturi, 
din toate perioadele existenței sale. Orașul a devenit un important 
centru artistic în antichitate, cu forme ale artei române remarcabile, 
cum ar fi arhitectură, pictură sau sculptură. Roma de mai târziu a 
devenit un centru important al Renașterii - papii au cheltuit sume 
colosale de bani pentru construcții de bazilici mărețe, palate, piețe și
 clădiri publice. Orașul a fost influențat foarte mult și de stilul 
baroc, iar Roma a devenit casă numeroșilor artiști și arhitecți, cum ar 
fi Bernini, Caravaggio, Carracci, Borromini și Cortona.</p>

									
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