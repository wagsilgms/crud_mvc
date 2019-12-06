<link rel="stylesheet" href="<?php echo BASE; ?>/assets/css/template.css">
<div class="new_login">
	<h3>Inserir Novo Contato</h3>
	<form method="POST">
		Nome:<br/>
		<input type="text" name="nome" /><br/><br/>

		E-mail:<br/>
		<input type="email" name="email" /><br/><br/>

		Senha:<br/>
		<input type="password" name="senha" /><br/><br/>

		<input type="submit" value="Cadastrar" style="cursor: pointer;" /><br/><br/>

		<?php
		if(!empty($aviso)) {
			echo "<div class='aviso'>".utf8_encode($aviso)."</div>";
		}
		?>
	</form>
</div>