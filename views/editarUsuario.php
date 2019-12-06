<link rel="stylesheet" href="<?php echo BASE; ?>/assets/css/template.css">
<div class="new_login">
	<h3>Editar Contato</h3>
	<?php foreach ($usuario as $user) {} ?>
	<form method="POST">
		Nome:<br/>
		<input type="text" name="nome" value="<?php echo $user['nome']; ?>" /><br/><br/>

		E-mail:<br/>
		<input type="email" name="email" value="<?php echo $user['email']; ?>" /><br/><br/>

		<input type="submit" value="Editar" style="cursor: pointer;" /><br/><br/>

		<?php
		if(!empty($aviso)) {
			echo "<div class='aviso'>".utf8_encode($aviso)."</div>";
		}
		?>
	</form>
</div>