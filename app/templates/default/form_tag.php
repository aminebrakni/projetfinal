<?php $this->layout('layout', ['title' => 'form tag']) ?>

<?php $this->start('main_content') ?>
	<h2>Formulaire du tag</h2>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>


<?php $this->stop('main_content') ?>