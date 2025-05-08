<?php
echo'<h1> cadastro de aluno </h1>';

echo  '<pre>';
var_dump(
    $_POST
);
$nomeFormulario = $_POST['nome'];

$dsn = 'mysql:dbname=bd_chamadinhaa;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$insert = 'INSERT INTO 	tb_info_alunos  (nome) value (:nome)';

$box = $banco->prepare($insert);

$box->execute([
    ':nome'=> $nomeFormulario  
]);
$id_aluno =  $banco-> lastInsertId();

