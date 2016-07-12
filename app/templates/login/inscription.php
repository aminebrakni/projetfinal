<?php $this->layout('layout', ['title' => 'inscription']); ?>

<?php $this->start('main_content'); ?>

	<form method="POST">
		<input type="text" name="myform[username]" placeholder="Pseudo">
		<input type="text" name="myform[email]" placeholder="Email">
		<input type="password" name="myform[password]" placeholder="Password">

		<input type="submit" name="inscription" value="S'inscrire">
	</form>

<?php $this->stop('main_content'); ?>
