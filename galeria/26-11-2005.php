<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">

		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>SKKT Elektronik</title>
		<meta name="author" content="Marek Łunkiewicz & Maciej Gurgul">
		<link rel="stylesheet" href="../style/reset.css" type="text/css" />
		<link rel="stylesheet" href="../style/style.css" type="text/css" /> 
		<link rel="stylesheet" href="../js/anythingslider.css" type="text/css" />
		<link rel="stylesheet" href="../js/jquery-ui.min.css" type="text/css" />
		<link rel="stylesheet" href="fancybox/fancybox/jquery.fancybox-1.3.4.css" type="text/css">
		<link rel="shortcut icon" href="img/favicon.png">
		<script src="../js/jquery-1.6.3.min.js"></script>
		<script src="fancybox/fancybox/jquery.fancybox-1.3.4.js"></script>
		<script src="../js/jquery-ui.min.js"></script>
<script>
	$(document).ready(function(){
	$('#pgallery a').fancybox();
		$('#kalendarz').datepicker(
			{
				firstDay: 1,
					dateFormat: 'dd-mm-yy',
				onSelect: function(data){
					$("#tekst h3").text(data);
			}
			}
			);
			
			$('.footer').hide();
			$('.btn').toggle(function(){
				$(this).text('zwiń');
				$('.footer').slideDown(170);
			},function(){
				$(this).text('rozwiń');
				$('.footer').slideUp(150);
			});	
			
		});
</script>

</head>

<body>
	<div id="prv-billboard"></div>
	<div id="page">
		<header>
			<nav>
				<div class="center">	
					<a id="logo" href="#"><img src="../img/logo.png" alt="Brak loga"></a>
					<ul id="nav">
						<li><a href="../index.html">Aktualności</a></li>
						<li><a href="../opiekunowie.html">Opiekunowie</a></li>
						<li><a href="../galeria.html">Galeria</a></li>
						<li><a href="../historia.html">Historia</a></li>
					</ul> <!-- end of ul-nav-->
				</div>
				</nav>
				<div class="clear"></div>
				<div id="banner">
					<div id="foto">
					<div id="box">
						<span id="hello">WITAJCIE</span>
						<p>
							Witaj na stronie poświęconej Szkolnemu Kołu Krajoznawczo – Turystycznemu
							SKKT „Elektronik”. Koło działa przy Zespole Szkół Elektryczno – Elektronicznych
							w Szczecinie i zrzesza ludzi lubiących aktywnie spędzać wolny czas, a przy tym
							poznawać swoje miasto i region.  Uczymy się posługiwania mapą i kompasem w nieznanym terenie.
						</p>
					</div>
					</div>
				</div> <!-- end of banner -->
		</header>
		<div id="container">
			<div id="content">
				<ul id="pgallery">
						<?php
			if ($katalog = opendir('../foto/26.11.2005/')) {
    		while (false !== ($file = readdir($katalog))) {
   				 if ($file != "." && $file != ".." && $file) {
    			echo "<li><a href=\"../foto/26.11.2005/$file\" rel='gallery'><img src=\"../foto/26.11.2005/$file\" style='width: 150px; height:150px'><br></a></li>\n";
    			}
			}
		}
	?>
				</ul>
			</div> <!-- end of content-->
		</div><!--end container -->
		<div class="clear"> </div>
		<footer>
			
			<div id="row">
				
			 	<button class="btn">rozwiń</button>
				
			</div>
			
			<!-- end toggle-->
			<div class="footer">
			<div id="contact">
				<ul>
					<li>
						<p>telefon</p>
						<p>500 000 000</p>
					</li>
					<li>
						<p>e-mail</p>
						<p>skkt@gmail.com</p>
					</li>
					<li>
						<p>telefon</p>
						<p>500 000 000</p>
					</li>
					<li>
						<p>lokalizacja</p>
						<p>ul. Ks. Racibora 60/ 61</p>
					</li>
				</ul>
			</div><!-- end contact-->
			<div id="copyright">
				<a  target="_blank" href="http://tme.szczecin.pl">www.tme.szczecin.pl</a>
			</div>
			</div>
		</footer><!-- end footer -->
	</div><!-- end page -->
	</body>
</html>
