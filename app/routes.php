<?php
	
	$w_routes = array(

		# Default
		['GET', '/', 'Default#home', 'home'], // accueil
		['GET', '/profil', 'Default#profil', 'profil'],
		['GET', '/liste_tag/[:id]', 'Default#liste_tag', 'liste_tag'],
		['GET', '/detail_tag/[:id]', 'Default#detail_tag', 'detail_tag'],
		['GET|POST', '/form_tag', 'Default#form_tag', 'form_tag'],
		['GET|POST', '/preview/[:id]', 'Default#preview', 'preview'],

		# Connexion, inscription, ...
		['GET|POST', '/inscription', 'Login#inscription', 'inscription'],
		['GET|POST', '/connexion', 'Login#connexion', 'connexion'],
		['GET', '/deconnexion', 'Login#deconnexion', 'deconnexion'],
		['GET|POST', '/oublie', 'Login#oublie', 'oublie'],
		// à rajouter...

	);