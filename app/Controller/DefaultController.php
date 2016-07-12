<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ArticleManager;

class DefaultController extends Controller
{
	// ['GET', '/', 'Default#home', 'home'], // accueil
	// 	['GET', '/profil', 'Default#profil', 'profil'],
	// 	['GET', '/categorie/[:id]', 'Default#categorie', 'categorie'],
	// 	['GET', '/tag/[:id]', 'Default#tag', 'tag'],
	// 	['GET|POST', '/taguer', 'Default#taguer', 'taguer'],
	// 	['GET|POST', '/preview/[:id]', 'Default#preview', 'preview'],

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function profil()
	{
		$this->show('default/profil');
	}

	public function categorie($id)
	{
		$this->show('default/categorie');
	}

	public function tag($id)
	{
		$this->show('default/tag');
	}

	public function taguer()
	{
		$this->show('default/taguer');
	}

	public function preview()
	{
		$this->show('default/preview');
	}


}