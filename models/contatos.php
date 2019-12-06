<?php
class contatos extends model {

	private $uid;

	public function __construct($id = '') {
		parent::__construct();

		if(!empty($id)) {
			$this->uid = $id;
		}
	}
	
	public function isLogged() {

		if (isset($_SESSION['crud_mvc']) && !empty($_SESSION['crud_mvc'])) {
			return true;
		} else {
			return false;
		}
	}

	public function usuarioExiste($email) {

		$sql = "SELECT * FROM contatos WHERE email = '$email'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function getAll() {
		$array = array();

		$sql = "SELECT * FROM contatos";
		$sql = $this->db->query($sql);
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		
		return $array;
	}

	public function getUser($id) {
		$array = array();

		$sql = "SELECT * FROM contatos WHERE id = '$id'";
		$sql = $this->db->query($sql);
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		
		return $array;
	}

	public function getNome() {
		if (!empty($this->uid)) {
			$sql = "SELECT nome FROM contatos WHERE id = '{$this->uid}'";
			$sql = $this->db->query($sql);

			if($sql->rowCount() > 0) {
				$sql = $sql->fetch();
				return $sql['nome'];
			} else {
				return 'visitante';
			}
		}
	}

	public function inserirUsuario($nome, $email, $senha) {

		$sql = "INSERT INTO contatos SET nome = :nome, email = :email, senha = :senha";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->execute();

		$id = $this->db->lastInsertId();

		return $id;
	}

	public function editUser($nome, $email, $id) {

		$sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":id", $id);
		$sql->execute();

		header('Location: '.BASE);
	}

	public function deleteUsuario($id) {

		$sql = "DELETE FROM contatos WHERE id = $id";
		$sql = $this->db->query($sql);

		header('Location: '.BASE);
	}

	public function fazerLogin($email, $senha) {
		$sql = "SELECT * FROM contatos WHERE email = '$email' AND senha = '$senha'";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();
			$_SESSION['crud_mvc'] = $sql['id'];
			return true;
		} else {
			return false;
		}	
	}
}

?>