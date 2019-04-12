<?php
	class UserModel
	{
		private $UserID;
		private $Username;
		private $Password;
		private $Email;
		private $Fullname;
		private $Cellphone;
		private $RoleID;

		public function __construct() {
			$this->UserID = "";
			$this->Username = "";
			$this->Password = "";
			$this->Email = "";
			$this->Fullname = "";
			$this->Cellphone = "";
			$this->RoleID = "";
		}

		public function __construct($UserID, $Username, $Password, $Email, $Fullname, $Cellphone, $RoleID) {
			$this->UserID = $UserID;
			$this->Username = $Username;
			$this->Password = $Password;
			$this->Email = $Email;
			$this->Fullname = $Fullname;
			$this->Cellphone = $Cellphone;
			$this->RoleID = $RoleID;
		}

		public function getUserID() {
			return $this->UserID;
		}

		public function setUserID($UserID) {
			$this->UserID = $UserID;
		}

		public function getUsername() {
			return $this->Username;
		}

		public function setUsername($Username) {
			$this->Username = $Username;
		}

		public function getPassword() {
			return $this->Password;
		}

		public function setPassword($Password) {
			$this->Password = $Password;
		}

		public function getEmail() {
			return $this->Email;
		}

		public function setEmail($Email) {
			$this->Email = $Email;
		}

		public function getFullname() {
			return $this->Fullname;
		}

		public function setFullname($Fullname) {
			$this->Fullname = $Fullname;
		}

		public function getCellphone() {
			return $this->Cellphone;
		}

		public function setCellphone($Cellphone) {
			$this->Cellphone = $Cellphone;
		}

		public function getRoleID() {
			return $this->RoleID;
		}

		public function setRoleID($RoleID) {
			$this->RoleID = $RoleID;
		}
	}
?>