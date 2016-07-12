<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<nav>
	<?php if($utilisateur) { ?>
		Bonjour <?= $utilisateur['username'] ?> ! -
		<a href="<?= $this->url('deconnexion') ?>">Déconnexion</a> -

	<?php } else { ?>
		<a href="<?= $this->url('connexion') ?>">Connexion</a> -
		<a href="<?= $this->url('inscription') ?>">Inscription</a><?php } ?>		
	</nav>
	
	<h2>Liste des articles</h2>
	<ul>
	<?php foreach ($liste_des_articles as $article): ?>
			<!-- La fonction e() permet de nettoyer (htmlspecialchars etc ...) -->
			<li>
				<a href="<?= $this->url('detail', ['id' => $article['id']])?>"><?= $this->e($article['titre']) ?></a>
		</li>			
	<?php endforeach; ?>
</ul>
<?php $this->stop('main_content') ?>
