<!doctype html>
<?php
session_start();

	if (array_key_exists('errosCadastrado', $_SESSION))
	{
		$erros = $_SESSION['errosCadastrado'];
		unset($_SESSION['errosCadastrado']);

	}
	else
	{
		$erros = null;
	}
	require_once('modelo/tabelausuario.php');


 	if (array_key_exists('idUsuárioConectado',$_SESSION))
 	 {
 	 	$user_name = $_SESSION['username'];
 		$id = $_SESSION['idUsuárioConectado'];
 		$usuario = BuscaUsuarioPorId($id);
		

 	 }
 	else
 	 {
 		$usuario = null;
 	 }

?>


<html>
<head>
<meta charset="utf-8">
<title>Cadastro</title>
<link rel="stylesheet" type="text/css" href="cadastroprof.css">
</head>
<body>
			

			
	<div class="Cadastro">
		<form name="signup" method="post" action="controlador/cadastrando.php">
								<h2>Cadastro</h2>
								<?php if ($erros != null) { ?>
			<div class="alertalert-warning">
				<ul>
					<?php foreach ($erros as $erro) { ?>
						<li> <?= $erro ?> </li>
					<?php } ?>
				</ul>
			</div>
		<?php } ?>

			<label><b class="textcol">Nome</b></label><br>
			<input class="input" type="text" minlength="3" maxlength="255" placeholder="Digite seu nome" name="nome" required="">

			<label><b class="textcol">Usuário</b></label><br>
			<input class="input" type="text" minlength="6" maxlength="16" placeholder="Digite seu usuário" name="usuario" required="">

			<label><b class="textcol">Email</b></label><br>
			<input class="input" type="email " placeholder="Digite seu email" name="email" required="">

			<label><b class="textcol">Senha</b></label><br>
			<input class="input" type="password" minlength="7" maxlength="16" placeholder="Digite sua senha" name="senha" required="">

			<label><b class="textcol">Confirma senha</b></label><br>
			<input class="input" type="password" minlength="7	" maxlength="16" placeholder="Digite novamente sua senha" name="confirmasenha" required="">

			<?php if($usuario !=null  ||  $usuario['matricula'] != null){ ?>
			<label><b class="textcol">Matrícula</b></label><br>
			<input class="input"  type="text" minlength="7" maxlength="9" placeholder="Digite sua matricula" name="matricula" required="">
			<?php } ?>
			<input type="checkbox" name= "termo" value= "botao" checked class="checkbox" required><p class="Aceita">Você aceita os termos de uso ?</p>

			<button type="submit" class="btn2">Cadastrar</button><br>
			<?php if($usuario !=null  ||  $usuario['matricula'] != null){ ?>
			<a href="paginInc.php" > <button type="button" class="btn3" onclick="closeForm()">Fechar</button></a>
			<?php } ?>
			<?php if($usuario ==null  ||  $usuario['matricula'] == null){ ?>
			<a href="login.php" > <button type="button" class="btn3" onclick="closeForm()">Fechar</button></a>
			<?php } ?>





		</form>


	</div>

</body>
</html>
