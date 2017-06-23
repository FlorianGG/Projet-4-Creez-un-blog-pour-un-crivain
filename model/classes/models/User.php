<?php
	namespace model\classes\models;

	use model\classes\manager\UserManager;
	

	class User extends ModelAbstract{
		protected $_id;
		protected $_pseudo;
		protected $_email;
		protected $_pass;

		//fonction constructeur
		public function __construct(array $data = null){
			$this->hydrate($data);
			$this->manager = new UserManager;
		}

		//fonction static qui instancie un managerUser et retourn un objet User correspondant à l'email recherché
		public function loadByEmail($email){
			return $this->manager->loadByEmail($email);
		}

		//fonctions getters
		public function getId(){
			return $this->_id;
		}
		public function getPseudo(){
			return $this->_pseudo;
		}
		public function getEmail(){
			return $this->_email;
		}		
		public function getPass(){
			return $this->_pass;
		}
		//fonctions setters
		public function setId($id){
			$id = (int)$id;
			if ($id > 0) {
				$this->_id = $id;
			}
			return $this;
		}
		public function setPseudo($pseudo){
			if (is_string($pseudo) && (strlen($pseudo) <= 70)) {
				$this->_pseudo = $pseudo;
			}
			return $this;
		}
		//ajout d'une regex pour vérifier la conformité de l'adresse mail
		public function setEmail($email){
			if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)) {
				$this->_email = $email;
			}
			return $this;
		}
		public function setPass($pass){
			$this->_pass = $pass;
			return $this;
		}
	}
?>