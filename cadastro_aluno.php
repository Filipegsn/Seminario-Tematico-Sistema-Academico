<!DOCTYPE html>
<html>
<head>
	<title>CADASTRO DE ALUNO</title>
	<link rel="stylesheet" type="text/css" href="cadastro_aluno.css">
</head>
<body>
	<div class="background">
		<div class="topo"></div>
		<div class="box">
			<div class="logo">
				<img src="logo.png">
			</div>
			<h1>Sistema Acadêmico</h1>
		<form method="POST" action="login_acesso.php">
			<ul>Matricula</ul>
				<input autofocus type="txt" name="login" placeholder="Insira a Matricula" required/>
			<ul>Curso
				<!--<input type="txt" name="curso" placeholder="Escoha o Curso" required/>-->
				<select name="nome_curso">
					<option value="">Administração</option>
					<option>Gastronomia</option>
					<option>Direito</option>
				</select>
			</ul>
			<ul>Turno
				<!--<input type="txt" name="turno" placeholder="Escoha o Turno" required/>-->
				<select name="turno">
					<option>Matutino</option>
					<option>Vespertino</option>
					<option>Noturno</option>
				</select>
			</ul>

			<!--<input type="submit" value="Entrar" name="btn_entrar">-->
		</form>
			<ul class="botao1" input type="submit" value="Entrar" name="btn_entrar">Confirmar</ul>
			<!--<ul class="botao2">Voltar</ul>-->
		</div>
	</div>
</body>
</html>
