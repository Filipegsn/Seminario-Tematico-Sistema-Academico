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
			<ul class="nome">Nome:</ul>
				<input autofocus type="txt" name="nome" placeholder="Nome Completo" required/>
			<ul class="matricula">Matricula:</ul>
				<input autofocus type="txt" name="matricula" placeholder="Insira a Matricula" required/>
			<ul class="senha">Senha:</ul>
				<input autofocus type="txt" name="senha" placeholder="Defina uma Senha" required/>
			<ul class="curso">Curso
				<!--<input type="txt" name="curso" placeholder="Escoha o Curso" required/>-->
				<select name="nome_curso">
					<option value="">Administração</option>
					<option>Gastronomia</option>
					<option>Direito</option>
				</select>
			</ul>
			<ul class="turno1">Turno
				<!--<input type="txt" name="turno" placeholder="Escoha o Turno" required/>-->
				<select name="turno">
					<option>Matutino</option>
					<option>Vespertino</option>
					<option>Noturno</option>
				</select>
			</ul>
			<ul class="func">Função
				<!--<input type="txt" name="turno" placeholder="Escoha o Turno" required/>-->
				<select name="funcao">
					<option>Professor</option>
					<option>Aluno</option>
				</select>
			</ul>
			<!--lalalalala-->

			<!--<input type="submit" value="Entrar" name="btn_entrar">-->

		<?php
  require 'conexao_dbacademic.php';
  require 'classe_user.php';

  $user = new User($pdo);

    
  if (isset($_POST['nome']) && !empty($_POST['nome'])) {

    $user->setNome($_POST['nome']);
    $user->setMatricula($_POST['matricula']);
    $user->setSenha($_POST['senha']);

    /*
    $email = addslashes($_POST['email']);
    $senha =$_POST['senha'];*/
    
    $user->cadastrar($user);
    //$usuario->cadastrar($email,$senha);
    header("Location: index.php");
    exit;
    
  }
  
?>
		</form>
			<ul class="botao1" input type="submit" value="Entrar" name="btn_entrar">Confirmar</ul>
			<!--<ul class="botao2">Voltar</ul>-->
		</div>
	</div>
</body>
</html>
