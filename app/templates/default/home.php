<?php $this->layout('layout', ['title' => 'Titre']) ?>

<?php $this->start('main_content') ?>

		
	<section role="section" class="themes">
		<!-- La fonction e() permet de nettoyer (htmlspecialchars etc ...) -->
	<?php foreach ($categorie as $article): ?>		
			<article role="article">
				<a href="<?= $this->url('liste_tag', ['id' => $article['id']])?>"><?= $this->e($article['rubrique']);
				 ?></a>
			</article>		
	<?php endforeach; ?>
	</section>
<?php $this->stop('main_content') ?>
