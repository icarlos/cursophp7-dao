<?php

require_once("config.php");
/*
// CARREGAR UM USUARIO
//$root = new Usuario();

//$root->loadbyId(1);

//echo $root;

//carrega uma lista de usuário
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("t");
//echo json_encode($search);

// carrega o usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("carlos","123456");
//echo $usuario;
*/

//criando um novo usuário
//$aluno = new Usuario("antonio","@ac53");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

//$aluno->insert();

//echo $aluno;
/*
//altera usuários
$usuario = new Usuario();

$usuario->loadbyId(3);

$usuario->update("joao", "!@#$%¨&*");

echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadbyId(3);
$usuario->delete();

echo $usuario;


?>