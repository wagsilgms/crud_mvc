<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo BASE; ?>/assets/css/template.css">
<div class="login">
	<h2>CRUD em MVC<br><br>Login</h2><br>
<form method="POST">
	<strong>E-mail:</strong><br/>
	<input type="email" name="email"/><br/><br/>

	<strong>Senha:</strong><br/>
	<input type="password" name="senha"/><br/><br/>

	<input type="submit" value="Entrar" style="cursor:pointer;margin-bottom:15px;"/><br>
</form>
<a href="<?php echo BASE; ?>/cadastro/novo_cadastro"><button style="cursor:pointer;margin-bottom:15px;">Cadastre-se</button></a>
<?php
	if(!empty($aviso)) {
		echo "<div class='aviso'>".utf8_encode($aviso)."</div>";
	}
?>
</div>