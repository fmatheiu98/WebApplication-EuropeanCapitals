<!DOCTYPE html>
<html>
<head>
    <title>Adaugare Pagina</title>
    <link rel="stylesheet" type="text/css" href="add_style.css">
</head>
<body>
<div class="header">
    <h2>Adaugare Pagina Noua</h2>
</div>

<form method="post">
    <div class="input-group">
        <label>Nume pagina noua:</label>
        <input type="text" name="nume_pagina" >
    </div>
    <div class="input-group">
        <label>Continut pagina:</label>
        <textarea rows="10" name="continut_pagina"> </textarea>
    </div>
    <div class="input-group">
         <button type="submit" class="btn" name="adauga_pagina"> Adauga pagina </button> 
        <input type="reset" class="reset" value="Resetare" />

    </div>

</form>
</body>
</html>

<?php

$db = mysqli_connect('localhost', 'root', '', 'users');
mysqli_select_db($db,'users');
$query = "SELECT * FROM pagini";
$res = mysqli_query($db,$query);



if(isset($_POST['nume_pagina']) && isset($_POST['continut_pagina']))
    if($_POST['nume_pagina'] && $_POST['continut_pagina'])
    if(isset($_POST['adauga_pagina']))
    {
        $nume_pag = mysqli_real_escape_string($db, $_POST['nume_pagina']);
        $continut = mysqli_real_escape_string($db, $_POST['continut_pagina']);


        $user_check_query = "SELECT * FROM pagini WHERE page_name='$nume_pag' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $pag = mysqli_fetch_assoc($result);

        if ($pag)
            if ($pag['page_name'] === $nume_pag) 
            {
                echo "Pagina exista deja!";
                return;
            }
        
     
        $query = "INSERT INTO pagini (page_name,page_content)  VALUES ('$nume_pag', '$continut')";
        mysqli_query($db, $query);

       
        $struct = ' <?php 

        session_start();
        
        
        if (isset($_GET["logout"])) {
            session_destroy();
            unset($_SESSION["username"]);
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
'."function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'ro',autoDisplay: false}, 'google_translate_element2');}".'
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


        
<script type="text/javascript">
/* <![CDATA[ */
'."eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\\b'+e(c)+'\\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9(\"o\");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))".'
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
                                                <?php include('."'./page_add/print_pages.php'); ?>".'
                                            </li>
                                            <li><a href="galerie.php">Galerie</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="/login/login.php">Login</a></li>
                                            <?php  if (isset($_SESSION["username"])) : ?>
                                                <li style="font-size: 80%">Bine ai venit, <?php echo $_SESSION["username"]; ?></li>
                                                <li style="font-size: 80%"> <a href="index.php?logout="1"" style="color: darkturquoise">Log out</a> </li>
                                            <?php endif ?>
                                            
                                            <a href="#" onclick="doGTranslate(\'ro|en\');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="English" /></a><a href="#" onclick="doGTranslate(\'ro|ro\');return false;" title="Romanian" class="gflag nturl" style="background-position:-400px -200px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="Romanian" /></a>
                                        </ul>
                                    </nav>
        
                            </div>
                        </div>
        
                    <!-- Main -->
                        <div class="wrapper style2">
                            <div class="title">'.$nume_pag.'</div>
                            <div id="main" class="container">
                                <div class="row 150%">
                                    <div class="8u 12u(mobile)">
        
                                            <div id="content">
                                                <article class="box post">
                                                    
                    
                 <p>'.$continut.'</p>
                                                
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
                                                    <?php include('."'./page_add/print_pages.php'); ?>".'
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
        </html>';
        file_put_contents("../".$nume_pag.".php",$struct);
        //$myfile = fopen($nume_pag, "w");
        //fwrite($myfile, $continut);
        
        header('location: ../index.php');
    }
?>
