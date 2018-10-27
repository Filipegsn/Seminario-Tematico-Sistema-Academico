<!DOCTYPE html>
<html>
<head>
	<title>EFETUAR LOGIN</title>
	<link rel="stylesheet" type="text/css" href="tela_login.css">
</head>
<body>
	<div class="background">
		<div class="box">
			<div class="logo">
				<img src="logo.png">
			</div>
			<h1>Sistema Acadêmico</h1>
		<form method="POST" action="login_acesso.php">
			<ul>Matricula</ul>
			<input autofocus type="txt" name="login" placeholder="Insira sua Matricula" required/>
			<ul>Senha</ul>
			<input type="password" name="senha" placeholder="Insira sua Senha" required/>
			<!--<input type="submit" value="Entrar" name="btn_entrar">-->
		</form>
			<ul class="botao1" input type="submit" value="Entrar" name="btn_entrar">Confirmar</ul>
			<!--<ul class="botao2">Voltar</ul>-->
		</div>
	</div>
</body>
</html>
