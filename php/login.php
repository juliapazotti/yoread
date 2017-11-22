<?php
	require_once("../config.php");
//o apache é o servidor. Para acessa-lo, digitamos o endereço (ip ou localhost)

	if ($_SERVER['REQUEST_METHOD'] == 'POST') { //checa se o metodo é post (post é o metodo http que salva). Se for post ele entra no código abaixo.

		if(checkValues($_POST['user'], $_POST['senha'])) //vai checar os valores dessa galera ai pra saber se ta preenchido ou não de acordo com a função checkvalues
		//importante: no C, as funções tem que estar no começo do código. No PHP não precisa
		//aquele $_server: pede o método da requisição que ele recebeu, aí ele respondeu que é post, então a página está olhando na variável post as variáveis que estão dentro dele
		//user e senha que a pessoa digitou
		//$_POST variável que tem todos os parâmetros do formulário
		//para acessa-los, usa colchete, aspas simples e o nome de cada input
		{
			$username = $_POST['user'];//se tiver preenchido roda
			$senha = $_POST['senha'];
			login($username, $senha); //criou um método que faz login
			//pega a senha do input e salva na variável senha 
			//pega o user do input e salva na variável username 
			//jogar la em cima ficaria melhor
		}
		else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="index.php">Tentar Novamente</a></h3>'; //se não tiver mostra isso aqui
						//pode fazer de outras formas mais bonitinhas
			echo $message;
		}
	}
	else {		
		header("Location: ../index.html");
	}

	function checkValues($username, $senha) { //código do metodo checkvalues, ele recebe dois parametros, confere se o parametro usuário isset (está colocado) e se ele não está vazio.
	// se o username tiver recebido $username =  ''; é verdadeiro mas não tem um conteúdo
	// então, ele confere que existe algum valor no campo
	//só coloca no checkvalues campos obrigatórios
		if( isset($username) && !empty($username) && isset($senha) && !empty($senha) ){
			$R = true; //se tudo estiver determinado e não vazio, R (resposta) recebe true, ou seja, é verdadeira
			//o tipo de R: o php tem tipagem dinâmica, se você criar uma variável, ele vai determinar o tipo de acordo com o valor que você coloca. Por isso, check values vai funcionar como uma função com retorno boolean
		}
		else {
			$R = false; //ou falsa
		}
		return $R; //devolve a resposta
	}

	function login($username, $senha) { //metodo login: cria uma variável chamada config e da um new config
		$config = new Config(); //vem no require: ta importanto o config.php pra ele saber o que é esse config que está escrito aí
		$conexao = $config->conectaBanco(); //roda o metodo que tem no config chamado conecta banco
		//ele da um return da conexão com o mysql

		$query = "SELECT * FROM yoread.users WHERE username  = '".$username."' AND senha = ".$senha; //tirar esse yoread e configurar la no config pro banco chamar yoread
		//faz uma busca no banco, um select (banco de dados me mostre coisas, pesquisa), pesquisa tudo que tiver na tabela usuário, sendo que o usuário tem que ser - ao username que te passei e a senha tem que estar igual a senha que te passei 
		//ali em username amaerelo é a que não pode mudar, é a coluna da tabela que tu ta procurando

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error); //usa pra mim essa conexão que vc criou e essa query que eu fiz ou morre
		//tenta pegar um resultado dessa consulta, e com o resultado ele vai olhar se tinha la o usuário e a senha igualzinho o cara digitou o login existe (ali embaixo)

		if(mysqli_num_rows($result) == 1){
			$user = $result->fetch_array(MYSQLI_ASSOC);
			session_start(); //o numero de colunas que voltaram no resultado é igual a 1 (o mesmo usuário não tem 2 senhas diferentes)
			//se for = 1 ta certo
			//jogas os dados que vieram do banco dentro da variável user
			//deu um session start: cria uma sessão no submarino 
			$_SESSION['user']['username'] = $user['username'];
			$_SESSION['user']['nome'] = $user['nome'];
			$_SESSION['user']['id'] = $user['id']; 
			header("Location: inicial.php");
			//vai na variavel e procura as colunas da tabela, coloca o que tava na tabela na variável correspondente (email, nome, etc)
			//armazena isso ai na sessão http
			//pediu o email pq ele é a chave primaria, e vou precisar dele pra chave estrangeira
			//usar para todas as paginas pós login
		}
		else {
			$message = '<h1>Senha ou username Incorretos.</h1> 
						<h3>Por favor, <a href="index.php">Tente Novamente</a></h3>';
						echo $message;
						//caso não esteja correto, manda essa mensagem
						//estava ali embaixo comentada caso de erro

		}
	}
?>