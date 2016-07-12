<?php $this->layout('layout', ['title' => 'inscription']); ?>

<?php $this->start('main_content'); ?>

	<article role="article">

		<form method="POST">	
			<label for="username">Pseudo</label>
			<input type="text" name="myform[username]" placeholder="Pseudo">

			<label for="email">Votre email</label>
			<input type="text" name="myform[email]" placeholder="Email">

			<label for="password">Votre mot de passe</label>
			<input type="password" name="myform[password]" placeholder="Password">

			<input type="submit" name="inscription" value="S'inscrire">
		</form>
		
	</article>

<?php $this->stop('main_content'); ?>


