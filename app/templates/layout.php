<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title><?= $this->e($title) ?></title>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->

			<!--[if lt IE 8]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->

			<!--[if lt IE 7]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
		
	</head>
	<body>
		<div class="outer-wrapper">
			<div class="wrapper">
				<header role="header">
					<i class="fa fa-bars nav-toggle"></i>
					<nav role="navigation" class="main-navigation">
						<ul>
						<?php if(isset($_SESSION['user'])) { ?>
								<li><a href="<?= $this->url('home') ?>">Accueil</a></li>
								<li><a href="<?= $this->url('profil') ?>">Mon Profil</a></li>
								<li><a href="<?= $this->url('deconnexion') ?>">Déconnexion</a></li>				
						<?php } else { ?>
								<li><a href="<?= $this->url('connexion') ?>">Connexion</a></li>
								<li><a href="<?= $this->url('inscription') ?>">Inscription</a></li>
						<?php } ?>
						</ul>		
					</nav>		
				</header>
				
				<main role="main">
					<h1><?= $this->e($title) ?></h1>
					<?= $this->section('main_content') ?>
				</main>
				<footer role="footer">
				</footer>
			</div>
		</div>
		<!-- CDN jQuery -->
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		<!-- Script du site -->
		<script type="text/javascript" src="<?= $this->assetUrl('js/script.js') ?>"></script>
	</body>
</html>