<?php

class cadastroController extends controller {

	public function __construct() {
        parent::__construct();
    }

    public function novo_contato() {
        $dados = array('aviso'=>'');

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {

            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);

            if(!empty($nome) && !empty($email) && !empty($senha)) {

                $c = new contatos();

                if(!$c->usuarioExiste($email)) {

                    $_SESSION['crud_mvc'] = $c->inserirUsuario($nome, $email, $senha);
                    header("Location: ".BASE);

                } else {
                    $dados['aviso'] = utf8_decode("Este usuário já existe!");
                }

            } else {
                $dados['aviso'] = utf8_decode("Preencha todos os campos!");
            }

        }

        $this->loadTemplate('novo_contato', $dados);
    }

    public function novo_cadastro() {
        $dados = array('aviso'=>'');

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {

            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);

            if(!empty($nome) && !empty($email) && !empty($senha)) {

                $c = new contatos();

                if(!$c->usuarioExiste($email)) {

                    $_SESSION['crud_mvc'] = $c->inserirUsuario($nome, $email, $senha);
                    header("Location: ".BASE);

                } else {
                    $dados['aviso'] = utf8_decode("Este usuário já existe!");
                }

            } else {
                $dados['aviso'] = utf8_decode("Preencha todos os campos!");
            }

        }

        $this->loadView('novo_cadastro', $dados);
    }

    public function delUser($id) {
		$c = new contatos();
		$c->deleteUsuario($id);
	}

	public function editaUsuario($id) {

		$dados = array();

		$c = new contatos();
		$dados['usuario'] = $c->getUser($id);

		if( !empty($_POST['nome']) ) {

			$nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);

            $c->editUser($nome, $email, $id);

        }

		$this->loadTemplate('editarUsuario', $dados);
	}
}

?>