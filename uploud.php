﻿<html>
	<body>


	<?php

	if(isset($_FILES['arquivo'])):
		$formatosPermitidos =  array("pdf" ,"zip" , "docx" );
		$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
		if (in_array($extensao, $formatosPermitidos)):
			$pasta = "../../arquivos/";
			$temporario	= $_FILES['arquivo']['tmp_name'];
			$novoNome = uniqid().".$extensao";

			if(move_uploaded_file($temporario,$pasta.$novoNome)):
				$menssagem = "Upload feito com sucesso!";
			else:
				$menssagem = "Erro, não foi possivel fazer o upload!";
			endif;
		else:
			$menssagem = "Formato invalido";
		endif;
		echo $menssagem;

	endif;
	
	?>
			
		<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method 	="POST"  enctype="multipart/form-data">
			<input name="teste" value="123" type="hidden">
			<input type="file" name = "arquivo"><br>
			<input type="submit" name="enviar-lista">
		</form>

	</body>
</html> 