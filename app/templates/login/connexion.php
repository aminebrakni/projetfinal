<?php $this->layout('layout', ['title' => 'Connexion']); ?>

<?php $this->start('main_content'); ?>


	<form method="POST">
		<input type="text" name="myform[username]" placeholder="Login">
		<input type="password" name="myform[password]" placeholder="Password">
		<input type="submit" name="connexion" value="Se connecter">
	</form>

<?php $this->stop('main_content'); ?>
