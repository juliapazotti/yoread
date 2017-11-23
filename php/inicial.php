<?php
	require_once("functions.php");
	seguranca();

	$username = $_SESSION['user']['username'];
	$nome = $_SESSION['user']['nome'];
?>

<!DOCTYPE HTML>

<html lang="pt-BR">
	<head>
		<title>Yoread</title>
		<link rel="stylesheet" href="../styleinicial.css" />
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
					<a class = "avatar" href="../perfil.html" ><img src = "avatar.png" title="Perfil" border="none" /></a>
				</div>
			</div>
			<div id = "divpub">
				<div id = "posipublicon">
					<a class = "publicon" href="../publicar.html" ><img src = "publicon.png" title="Publicar" border="none" /></a>
				</div>
			</div>

			<div style="float: right; margin: -20px 20px auto;">
				<a href= "../perfil.html">
					<?php echo $username ?>
				</a>
				&nbsp;
				<a href= "logout.php">
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
				echo "			<a class = \"lermais\" href=\"../publicacao.html".$row[""]."\">Ler mais...</a></p>";  //cod_publicacao tirei de dentro das aspas
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

	</body>
</html>
