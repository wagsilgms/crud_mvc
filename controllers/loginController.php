<?php
class loginController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        
        if(isset($_POST['email']) && !empty($_POST['email'])) {

            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);

            $c = new contatos();

            if($c->fazerLogin($email, $senha)) {
                header("Location: ".BASE);
            } else {
                $dados['aviso'] = utf8_decode("Usuário ou senha incorretos!");
            }
        }
        $this->loadView('login', $dados);
    }

    public function sair() {
        unset($_SESSION['crud_mvc']);
        header("Location: ".BASE."/login");
    }

}