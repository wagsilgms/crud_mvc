<a href="<?php echo BASE; ?>/cadastro/novo_contato"><button class="adic">Cadastrar Novo Contato</button></a>
<a href="<?php echo BASE; ?>/login/sair"><button class="exit">Sair</button></a>
<div class="nome">Seja bem vindo(a), <?php echo utf8_encode($nome); ?>!</div>
<table border="2" width="100%">
	<thead>
		<th>Id</th>
		<th>Nome</th>
		<th>Email</th>
		<th>Ações</th>
	</thead>
	<?php foreach ($lista as $item): ?>
	<tr>
		<td><?php echo utf8_encode($item['id']); ?></td>
		<td><?php echo utf8_encode($item['nome']); ?></td>
		<td><?php echo utf8_encode($item['email']); ?></td>
		<td class="ac">
			<a href="<?php echo BASE; ?>/cadastro/editaUsuario/<?php echo $item['id']; ?>">
				<button class="edit">Editar</button></a>
			<a href="<?php echo BASE; ?>/cadastro/delUser/<?php echo $item['id']; ?>">
				<button class="del">Deletar</button>
			</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>