<?php
    require ('steamauth/steamauth.php');
	# You would uncomment the line beneath to make it refresh the data every time the page is loaded
	// unset($_SESSION['steam_uptodate']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Hardino</title>
	<meta charset="utf-8">
	<meta name="author" content="Hirako">
	<meta name="description" content="Site officiel de Hardino"/>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox-thumbs.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox-buttons.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/fancybox.js"></script>
    <script type="text/javascript" src="js/fancybox-buttons.js"></script>
    <script type="text/javascript" src="js/fancybox-media.js"></script>
    <script type="text/javascript" src="js/fancybox-thumbs.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<style>
		.button {
		background-color: #1c87c9;
		border: none;
		color: white;
		padding: 20px 34px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 20px;
		margin: 4px 2px;
		cursor: pointer;
		}
	 </style>
</head>
<body>
	<section class="billboard light">
		<header class="wrapper light">
			<a href="#"><img class="logo" src="img/logo_light.png" alt=""/></a>
			<nav>
				<ul>
					<li><a href="">Plus d'infos</a></li>
					<li><a href="">Boutique</a></li>
					<li><a href="">Contactez nous</a></li>
					<li><h6>.</h6></li>
					<?php
	if(!isset($_SESSION['steamid'])) {
	
		loginbutton(); //login button
		
	}  else {
		include ('steamauth/userInfo.php');
	
		//Protected content
		echo "Welcome back " . $steamprofile['personaname'] . "</br>";
		echo "here is your avatar: </br>" . '<img src="'.$steamprofile['avatarfull'].'" title="" alt="" /><br>'; // Display their avatar!
		
		logoutbutton();
	}    
	?>  
				</ul>
			</nav>
		</header>

		<div class="caption light animated wow fadeInDown clearfix">
			<h1>Bienvenue sur le site de HardinoRP</h1>
			<p>Le site officiel !</p>
			<hr>
		</div>
		<div class="shadow"></div>
	</section><!--  End billboard  -->


	<section class="services wrapper">
		<ul class="clearfix">
			<li class="animated wow fadeInDown">
				<img class="icon" src="img/money.png" alt=""/>
				<span class="separator"></span>
				<h2>Boutique</h2>
				<p>Faites un petit tour par notre boutique ! De nouvelles promotions sont disponible !</p>
				<br /><hr />
				<a href="https://www.google.com/" class="button">Cliquez ici</a>
			</li>
			<li class="animated wow fadeInDown"  data-wow-delay=".2s">
				<img class="icon" src="img/actu.png" alt=""/>
				<span class="separator"></span>
				<h2>Actualités</h2>
				<p>Pour toutes les mises à jours et autres, c'est ci-dessous.</p>
				<br /><hr />
				<a href="https://www.google.com/" class="button">Cliquez ici</a>
			</li>
			<li class="animated wow fadeInDown"  data-wow-delay=".4s">
				<img class="icon" src="img/serveur.png" alt=""/>
				<span class="separator"></span>
				<h2>Serveur</h2>
				<p>Pour savoir si notre serveur tourne toujour et si bien, cliquez sur le bouton ci-dessous..</p>
				<br /><hr />
				<a href="https://cosmhost.info/" class="button">Cliquez ici</a>
			</li>
		</ul>
	</section><!--  End services  -->


	<section class="video">
		<img src="img/spectate.png" alt="" class="video_logo animated wow fadeInDown"/>
		<h3 class="animated wow fadeInDown">Trailer du serveur</h3>
		<a href="https://www.youtube.com/watch?v=U3mMvaxg4k8&t" id="play_btn" class="fancybox animated wow flipInX" data-wow-duration="2s"></a>
	</section><!--  End video  -->


	<section class="testimonials wrapper">
		<div class="title animated wow fadeIn">
			<h2>Notre équipe</h2>
			<h3>Besoin d'aide ? Ils sont là pour ça !</h3>
			<hr class="separator"/>
		</div>

		<ul class="clearfix">
			<li class="animated wow fadeInDown">
				<span class="triangle"></span>
				</p>
				<div class="client">
					<img src="img/client1.jpg" class="avatar"/>
					<div class="client_details">
						<h4>Zing</h4>
						<h3>Fondateur</h3>
					</div>
				</div>
			</li>
			<li class="animated wow fadeInDown"  data-wow-delay=".2s">
				<span class="triangle"></span>
				</p>
				<div class="client">
					<img src="img/client2.jpg" class="avatar"/>
					<div class="client_details">
						<h4>Hirako</h4>
						<h3>Fondateur</h3>
						<h3>Developeur</h3>
					</div>
				</div>
			</li>
			<li class="animated wow fadeInDown"  data-wow-delay=".4s">
				<span class="triangle"></span>
				</p>
				<div class="client">
					<img src="img/client3.jpg" class="avatar"/>
					<div class="client_details">
						<h4>𝚁𝚎𝚢 𝙻𝚊𝚗𝚐𝚜𝚝𝚘𝚗</h4>
						<h3>Developeur</h3>
					</div>
				</div>
			</li>
		</ul>
	</section><!--  End testimonials  -->


	<section class="blog_posts">
		<div class="wrapper">
			
		</div>
	</section><!--  End blog_posts  -->


	<footer>
		<div class="wrapper">
			<div class="rights">
				<img src="img/logo_light2.png" alt="" class="footer_logo"/>
				<p>© Hardino. All Rights Reserved 2020 - Serveur Garry's Mod <a href="http://hardino.com" target="_blank">Hardino.com</a></p>
			</div>

			<nav>
				<ul>
					<li><a href="#">Plus d'infos</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Boutique</a></li>
					<li><a href="#">Nous contactez</a></li>
					<p><br /><hr /></p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick" />
						<input type="hidden" name="hosted_button_id" value="ZE64CDZAFBL64" />
						<input type="image" src="https://i.imgur.com/keSW5Eq.png" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Bouton Faites un don avec PayPal" />
						<img alt="" border="0" src="https://www.paypal.com/fr_BE/i/scr/pixel.gif" width="1" height="1" />
						</form>
				</ul>
			</nav>
		</div>		
	</footer><!--  End footer  -->
    <script src='../ga.js'></script>
</body>
</html>