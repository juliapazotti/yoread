<?php
	require_once("php/functions.php");
	seguranca();

	$username = $_SESSION['user']['username'];
	$nome = $_SESSION['user']['nome'];
	$sobrenome = $_SESSION['user']['sobrenome'];
?>

<!DOCTYPE HTML>

<html lang="pt-BR">
	<head>
		<title>Yoread</title>
		<link rel="stylesheet" href="styleinicial.css" />
		<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
	</head>

	<body>

		<!-- topo -->
		<div id = "topo">
			<div id = "logo">
				<p>Yoread</p>
			</div>
			<div id = "divavatar">
				<div id = "posiavatar">
					<a class = "avatar" href="perfil.html" ><img src = "avatar.png" title="Perfil" border="none" /></a>
				</div>
			</div>
			<div id = "divpub">
				<div id = "posipublicon">
					<a class = "publicon" href="publicar.html" ><img src = "publicon.png" title="Publicar" border="none" /></a>
				</div>
			</div>

			<div style="float: right; margin: -20px 20px auto;">
				<a href= "perfil.html">
					<?php echo $username ?>
				</a>
				&nbsp;
				<a href= "php\logout.php">
					Logout
				</a>
			</div>
		</div>

		<!-- meio -->
		<?php
		require_once("../config.php");
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "select titulo, sinopse, id_user, cod_publicacao from yoread.publicacao";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		$num = 0;
		if ($result->num_rows > 0) {
    	// output data of each row
	    while($row = $result->fetch_assoc()) {
				$num = $num + 1;
				echo "<div class = \"quadro".$num."\">";
				echo "		<div class = \"textoconf\">";
				echo "			<h1 class = \"titulosinopse\">".$row["titulo"]."</h1>";
				echo "			<p class = \"sinopse\">".$row["sinopse"]."";
				echo "			<a class = \"lermais\" href=\"publicacao.php?id".$row["cod_publicacao"]."\">Ler mais...</a></p>";
				echo "			<a class = \"autor\" href=\"#\">".$row["id_user"]."</a>";
				echo "		</div>";
				echo "		<div class = \"posicon\">";
				echo "			<a class = \"icon\" href=\"#\" ><img src = \"add.png\" title=\"favoritar\" border=\"none\" /></a>";
				echo "		</div>";
				echo "</div>";
	    }
		} else {
			echo "<p>Nenhuma sinopse encontrada.</p>";
		}
		$conexao->close();
		?>

		<div class = "quadro4">
				<div class = "textoconf">
					<h1 class = "titulosinopse">O poder de amar</h1>
					<p class = "sinopse">40 rapazes, duas chances de encontrarem um amor ou subirem ao trono. Não será fácil. Elas vão se enganar e a incerteza pode ser questão de desespero. “Há pessoas que amam o poder, e outras que tem o poder de amar." <a class = "lermais" href="publicacao.html">Ler mais...</a></p>
					<a class = "autor" href="#">Otávio Castanho</a>
				</div>
				<div class = "posicon">
					<a class = "icon" href="#" ><img src = "add.png" title="favoritar" border="none" /></a>
				</div>
		</div>

		<div class = "quadro5">
				<div class = "textoconf">
					<h1 class = "titulosinopse">O diário de Lauren</h1>
					<p class = "sinopse">Lauren julga tudo por ser tão simples. Questiona o que acredita ser desconhecido. A perfeição antes era o seu desejo, mas agora, deparando-se com a sua vida, seu desejo não é o mesmo. A simplicidade acabou destruindo que é. Mudando algo certo, para duvidoso. <a class = "lermais" href="publicacao.html">Ler mais...</a></p>
					<a class = "autor" href="#">Olivia Pinheiro</a>
				</div>
				<div class = "posicon">
					<a class = "icon" href="#" ><img src = "add.png" title="favoritar" border="none" /></a>
				</div>
		</div>

		<div class = "quadro6">
				<div class = "textoconf">
					<h1 class = "titulosinopse">Desculpas</h1>
					<p class = "sinopse">“A cada passo para que tenho mais certeza de que aqui não é o meu lugar. Não com ele. Mexo minha boca dizendo calmamente desculpa. Sem esperar para a sua resposta, pego parte do vestido que está no chão e corro o mais rápido possível para fora da igreja. Posso imaginar o desespero da minha mãe em vem sua filha amada fugir do próprio casamento. ” <a class = "lermais" href="publicacao.html">Ler mais...</a></p>
					<a class = "autor" href="#">Edinaldo Gaspar</a>
				</div>
				<div class = "posicon">
					<a class = "icon" href="#" ><img src = "add.png" title="favoritar" border="none" /></a>
				</div>
		</div>

	</body>
</html>
