<link rel="stylesheet" href="<?php echo BASE; ?>/assets/css/template.css">
<div class="login" style="height: 450px;">
	<h2>Sistema MVC<br><br>Cadastro</h2><br>
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
			echo "<div class='aviso'>$aviso</div>";
		}
		?>
	</form>
</div>