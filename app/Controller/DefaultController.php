<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\TagManager;

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
		$user = $this->getUser();
		$this->show('default/home');
		
		$manager = new ArticleManager();
		$articles = $manager->findAll();
		$this->show('default/liste', ['liste_des_articles' => $articles, 'utilisateur' => $user]);	
	}

	public function profil()
	{
		$this->show('default/profil');
	}

	public function liste_tag($id){
		$manager = new TagManager();
		$tags = $manager->findAll();
		$this->show('default/liste_tag', [ 'liste_des_tags' => $tags]);
	}

	public function detail_tag($id)
	{
		$this->show('default/detail_tag');
	}

	public function form_tag()
	{
		$this->show('default/form_tag');
	}

	public function preview()
	{
		$this->show('default/preview');
	}


}