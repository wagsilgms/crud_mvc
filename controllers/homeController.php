<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();

        $c = new contatos();
        if (!$c->isLogged()) {
        	header('Location: '.BASE.'/login');
        }
    }

    public function index() {

        $dados = array('nome' => '');

        $c = new contatos($_SESSION['crud_mvc']);

        $id = $_SESSION['crud_mvc'];

        $dados['nome'] = $c->getNome();
        $dados['lista'] = $c->getAll();

        $this->loadTemplate('home', $dados);
    }
}