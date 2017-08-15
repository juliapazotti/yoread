<?php
	session_start();

	class Config
	{
		private $servidor = "localhost";
		private $user = "root";
		private $senha = "";
		private $banco = "";

		function conectaBanco() {
			$con = mysqli_connect($this->servidor, $this->user, $this->senha, $this->banco);

			if (!$con) {
			    die('Não foi possível conectar: ' . mysql_error());
			}

			return $con;
		}
	}

	$_SESSION['ROOT_ADDRESS'] = dirname(__FILE__);

?>