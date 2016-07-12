<?php
	
	$w_routes = array(

		# Default
		['GET', '/', 'Default#home', 'home'], // accueil
		['GET', '/profil', 'Default#profil', 'profil'],
		['GET', '/categorie/[:id]', 'Default#categorie', 'categorie'],
		['GET', '/tag/[:id]', 'Default#tag', 'tag'],
		['GET|POST', '/taguer', 'Default#taguer', 'taguer'],
		['GET|POST', '/preview/[:id]', 'Default#preview', 'preview'],

		# Connexion, inscription, ...
		['GET|POST', '/inscription', 'Login#inscription', 'inscription'],
		['GET|POST', '/connexion', 'Login#connexion', 'connexion'],
		['GET', '/deconnexion', 'Login#deconnexion', 'deconnexion'],
		['GET|POST', '/oublie', 'Login#oublie', 'oublie'],
		// à rajouter...


		
	);