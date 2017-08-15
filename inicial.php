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
			
			<div style="float: right; margin: -20px 20px auto">
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
		<div class = "quadro1">
				<div class = "textoconf">
					<h1 class = "titulosinopse">A dona do tempo</h1>
					<p class = "sinopse">Catarina é uma menina muito normal, só que um dia ela descobriu que tinha poderes mágicos, e podia controlar o tempo. Então, ela conhece Ian e descobre que ele vai mudar a vida dela para sempre. No decorrer da história você vai se deparar com criaturas mágicas, novos mundos, amor, ódio, fantasia, pensamentos filosóficos que mudarão a sua vida. <a class = "lermais" href="publicacao.html">Ler mais...</a></p>
					<a class = "autor" href="#">Diana Mastalli</a>
				</div>
				<div class = "posicon">
					<a class = "icon" href="#" ><img src = "add.png" title="favoritar" border="none" /></a> 
				</div>
		</div>
		
		<div class = "quadro2">
				<div class = "textoconf">
					<h1 class = "titulosinopse">A escolhida</h1>
					<p class = "sinopse"> O jogo começou. Uma arena, várias mulheres. Uma nova participante. A escolhida, que acabará fazendo suas próprias regras, mudando tudo o que eles já foram capazes de acreditar um dia. O desejo de vingança corria por suas veias. <a class = "lermais" href="publicacao.html">Ler mais...</a></p>
					<a class = "autor" href="#">Yara Rangel</a>
				</div>
				<div class = "posicon">
					<a class = "icon" href="#" ><img src = "add.png" title="favoritar" border="none" /></a> 
				</div>
		</div>
		
		<div class = "quadro3">
				<div class = "textoconf">
					<h1 class = "titulosinopse">A resposta</h1>
					<p class = "sinopse">“Não é apenas uma herança, se trata de algo maior. Tão grandioso que me trouxe de volta algo que achava que não precisava mais. Me trouxe você. O engraçado é que, como um ato em vão, tentei desesperadamente tirá-lo de minha cabeça. Creio que há certas coisas que não somos capaz de compreender. <a class = "lermais" href="publicacao.html">Ler mais...</a></p>
					<a class = "autor" href="#">Sophia Sanches</a>
				</div>
				<div class = "posicon">
					<a class = "icon" href="#" ><img src = "add.png" title="favoritar" border="none" /></a> 
				</div>
		</div>
		
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
