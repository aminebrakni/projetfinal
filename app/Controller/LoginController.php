<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \Manager\MyAuthentificationManager;

/* Controller */
class LoginController extends Controller {
	// methode qui répond à l'url /inscription
	public function inscription() {
		
		if (isset($_POST['inscription'])) {
			// On instancie un objet pour gerer l'accés à la table "wusers"
			$manager = new UserManager();
			// je définie un role user par défault à l'utilisateur
			$_POST['myform']['role'] = 'user';
			# J'utilise la valeur du password actuel, je lui donne la valeur que retourne la fonction 
			$_POST['myform']['password'] = password_hash($_POST['myform']['password'], PASSWORD_DEFAULT);
			# J'insert ensuite dans la base de donnée
			$manager->insert($_POST['myform']);
			# Je redirige vers la page liste.php
			$this->redirectToRoute('home');
		}
		# affiche la page dans templates/login/inscription.php
		$this->show('login/inscription');
	}

	public function connexion() {
		// Traitement de la connexion

		if (isset($_POST['connexion'])) {
			# pour réalise la connexion d'un utilisateur, nous avons besoin d'instancier deux "managers" 
			# 1 pour l'authentification
			# l'autre pour récupéré les informations de l'utilisateur (role, username, email ...)
			$authManager = new MyAuthentificationManager();
			$userManager = new UserManager();
			# On test via le manager de l'authentification si les informations entrées sont valides et match avec les info de la BDD
			if ($authManager->isValidLoginInfo($_POST['myform']['username'], $_POST['myform']['password'])) {
				# Je récupère les infos de l'utilisateur et je les affectes à la variable $user
				$user = $userManager->getUserByUsernameOrEmail($_POST['myform']['username']);
				# On log l'utilisateur (on créer une variable session)
				$authManager->logUserIn($user);
				# On redirige vers l'accueil
				$this->redirectToRoute('home');
			}
		}
		$this->show('login/connexion');
	}

	public function deconnexion(){
			// alternative à l'instanciation 
			// J'utilise la fonction static de la classe 
			MyAuthentificationManager::deconnexion();
			$this->redirectToRoute('home');
		
	}
	
}