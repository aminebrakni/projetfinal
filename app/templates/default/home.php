<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<nav>
	<?php if(isset($_SESSION['user'])) { ?>
		Bonjour <?= $_SESSION['user']['username'] ?>
		<a href="<?= $this->url('deconnexion') ?>">Déconnexion</a> 

	<?php } else { ?>
		<a href="<?= $this->url('connexion') ?>">Connexion</a> -
		<a href="<?= $this->url('inscription') ?>">Inscription</a><?php } ?>		
	</nav>
	
	<h1>Titre de l'application</h1>
		
	<section role="section">
	<?php foreach ($liste_des_articles as $article): ?>
			<!-- La fonction e() permet de nettoyer (htmlspecialchars etc ...) -->
			<article role="article">
				<a href="<?= $this->url('detail', ['id' => $article['id']])?>"><?= $this->e($article['titre']) ?></a>
			</article>		
	<?php endforeach; ?>
	</section>
<?php $this->stop('main_content') ?>
