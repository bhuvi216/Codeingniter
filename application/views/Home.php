<h1> <?=$this->session->userdata('savename')?>WELCOME</h1>
<form method="post" action="<?=base_url('name/save')?>">
<input type="text" name="name">

<input type="submit" value="save">
</form>
<?php if ($this->session->has_userdata('savename')) ?>
	<a href="<?=base_url('Name/clear')?>">clear</a>
<?php?>

