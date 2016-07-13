<?php $this->layout('layout', ['title' => 'Liste des tags par categorie']) ?>

<?php $this->start('main_content') ?>
	<h2>Liste des tags par categorie</h2>

	<ul>
	<?php foreach ($liste_des_tags as $tag): ?>
		<!-- <?php var_dump($tag) ?> -->
		<section>
			<a href="<?= $this->url('detail_tag', ['id' => $tag['id']]) ?>"><?= $this->e($tag['titre']) ?><br>
			<p><?= $this->e($tag['description']) ?></p>
			<img src="<?= $this->e($tag['photo']) ?>"></a>


		</section>

	<?php endforeach ?>
	</ul>

<?php $this->stop('main_content') ?>

