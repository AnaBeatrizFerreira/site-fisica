<?php
require_once('../modelo/tabelauploadfor.php');
require_once('../modelo/tabelausuario.php');


$request = array_map('trim', $_REQUEST);
$request = filter_var_array(
               $request,
               [ 
                'ass' => FILTER_VALIDATE_INT
                 ]
           );



$erro = [];

session_start();


if (array_key_exists('idUsuárioConectado', $_SESSION))
{

	$id = $_SESSION['idUsuárioConectado'];
	$master = BuscaUsuarioPorId($id);
	

}
else
{
	$_SESSION['erroLogin'] = 'Identifique-se para poder carregar um arquivo';
	Redireciona('../login.php');
}



$ass = $request['ass'];
if ($ass == false)
{
	$erros[] = "Deve ter assunto";
}
else if($ass < 0 || $ass > 60)
{
	$erros = "Assunto invalido";
}


if(isset($_FILES['arquivo'])):
	$formatosPermitidos =  array("pdf" ,"zip" , "docx" ,"doc","txt" ,"xlsx" ,"pptx","jpg" );
	$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
	if (in_array($extensao, $formatosPermitidos)):
		$temporario	= $_FILES['arquivo']['tmp_name'];
		$novoNome = $_FILES['arquivo']['name'];
		$pasta = "arquivos/$novoNome";
		if(move_uploaded_file($temporario,"../$pasta")):
			$request['arquivo'] = $pasta;
			$request['nome'] = $novoNome;
			$request['usuariosid'] = $master['id'];
			$menssagem = "Upload feito com sucesso!";
			$id = upload_feito($request);
   			header("Location:../formulas.php");
   			
		else:
			$menssagem = "Erro, não foi possivel fazer o upload!";

		endif;
	else:
		$menssagem = "Formato invalido";
	endif;
echo $menssagem;

endif; 


?>