<?php 

require_once("config.php");

/*
$sql = new Sql();
$user = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($user);
*/

//Carrega um usuário
/*
$user = new User();
//$user->loadById(3);
echo $user;
*/

//Carrega uma Lista de Usuários
/*
$lista = User::getList();
echo json_encode($lista);
*/

//Carrega uma Lista de Usuário buscando pelo login
/*
$search = User::search("jo");
echo json_encode($search);
*/

//Carrega o usuario usando o login e a senha
$user = new User();
$user->login("user", "12345");

echo $user;

?>