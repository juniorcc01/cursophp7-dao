<?php

require_once("config.php");
//Carrega 1 usuario;
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

// Carrega uma lista de usuarios
/*
$lista = Usuario::getList();
echo json_encode($lista);
*/

//Carrega lista de usuarios procurando pelo login
/*
$search = Usuario::search("ju");
echo json_encode($search);
*/

//Carrega um usuario usando login e senha.
/*
$usuario = new Usuario();
$usuario->login("user","123456");
echo $usuario;
*/

/*
insert de usuarios
$aluno = new Usuario("Dimla","Lula2018");
$aluno->insert();
echo $aluno;
*/
/*
UPDATE DE USUARIOS
$usuario = new Usuario();
$usuario->loadbyId(8);
echo($usuario);
$usuario->update("LULINHA","lula2018");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadbyId(8);
$usuario->deleta();

echo $usuario;

?>