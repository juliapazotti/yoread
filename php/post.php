<?php
	require_once("../config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['titulosinopse'], $_POST['linkfinanciamento'], $_POST['sinopse']))
		{
			$titulo = $_POST['titulosinopse'];
			$link = $_POST['linkfinanciamento'];
			$sinopse = $_POST['sinopse'];
			cadastrar($titulo, $link, $sinopse);
		}
		else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="publicar.html">Tentar Novamente</a></h3>';
			echo $message;
		}
	}
	else {		
		//header("Location: ../index.html");
	}

	function checkValues($username, $senha) {
		return true;
	}

	function cadastrar($titulo, $link, $sinopse) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "INSERT INTO yoread.publicacao (link, sinopse, titulo, cod_publicacao) VALUES ('".$link."', '".$sinopse."', '".$titulo."', NULL)";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if($result !== null){
			session_start();
			$_SESSION['user']['username'] = $username;
			$_SESSION['user']['nome'] = $nome;
			$_SESSION['user']['sobrenome'] = $sobrenome; //fazer salvar o email na pagina do login.php
			header("Location: ../inicial.php");
		}
		else {
			$message = '<h1>Senha ou username Incorretos.</h1>
						<h3>Por favor, <a href="index.php">Tente Novamente</a></h3>';
		}
		//echo $message;
	}
?>