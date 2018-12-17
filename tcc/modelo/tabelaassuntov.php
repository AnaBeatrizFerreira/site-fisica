<?php
require_once('acesso_ao_banco.php');


function ListaAssuntosv()  
{

  $bd = CriaConexãoBd();

  $sql = $bd->prepare("SELECT * FROM assuntos ");

  $sql->execute();

  return $sql->FetchAll();
}



function add_assuntosv($novoassunto)
{
 
  $bd = CriaConexãoBd();
	
  $sql = $bd -> prepare('INSERT INTO assuntos(nome) VALUES (:valnome)');
  
  $sql->bindValue(':valnome', $novoassunto['nome']);
  
  $sql->execute();
  
  return $bd->lastInsertid();
}

?>