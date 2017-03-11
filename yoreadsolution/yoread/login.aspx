<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="login.aspx.cs" Inherits="yoread.login" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Yoread</title>
    <link rel="stylesheet" href="stylelogin.css"/>
	<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <!------topo------>
		<div id = "topo">
			<div id = "logo">
				<p>Yoread</p>
			</div>
		</div>
		
		<!------cadastro------>
		<div id = "cadastro">
			<p class = "titulo">Inscreva-se</p>
			<label for="nome">Nome</label>
    		<input type="text" class="formulario" id ="tamquadrado1" name="nome"/>
			</br>
			</br>
			<label for="nusu">Nome de usuário</label>
    		<input type="text" class="formulario" id ="tamquadrado2" name="user"/>
			</br>
			</br>
			<label for="mail">E-mail</label>
   			<input type="email" class="formulario" id ="tamquadrado3" name="email"/>
			</br>
			</br>
			<label for="senha">Senha</label>
    		<input type="text" class="formulario" id ="tamquadrado4" name="senha"/>
			</br>
			</br>
			<label for="confsenha">Confirmação da senha</label>
    		<input type="text" class="formulario" id ="tamquadrado5" name="confirma"/>
			<div class = "botao">
				<div class = "posibotao">
					<a class = "linkbotao" href="inicial.aspx">Inscrever-me</a>
				</div>
			</div>
		</div>
		
		<!------linha------->
		<div id = "linha">
		
		</div>
		
		<!------login------>
		<div id = "login">
			<p class = "titulo">Entrar no Yoread</p>
			<label for="nusu">Nome de usuário</label>
    		<input type="text" class="formulario" id ="tamquadrado6" name="user"/>
			</br>
			</br>
			<label for="senha">Senha</label>
    		<input type="text" class="formulario" id ="tamquadrado7" name="senha"/>
			<div class = "botao2">
				<div class = "posibotao2">
					<a class = "linkbotao2" href="inicial.aspx">Entrar</a>
				</div>
			</div>
		</div>
    </div>
    </form>
</body>
</html>
