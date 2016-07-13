<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\CategorieManager;

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
		$manager = new CategorieManager();
		$categorie = $manager->findAll();
		$this->show('default/home', [ 'categorie' => $categorie ]);
	}

	public function profil()
	{
		$this->show('default/profil');
	}

	public function liste_tag($id){
		$this->show('default/liste_tag');
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