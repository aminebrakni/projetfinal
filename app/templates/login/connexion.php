<?php $this->layout('layout', ['title' => 'Connexion']); ?>

<?php $this->start('main_content'); ?>


	<form method="POST">
	<div class="group">
		<input type="text" name="myform[username]" placeholder="Login">
		<input type="password" name="myform[password]" placeholder="Password">
		<input type="submit" name="connexion" value="Se connecter">
	</div>
	<div class="group">
	</div>
		
	</form>

<?php $this->stop('main_content'); ?>
