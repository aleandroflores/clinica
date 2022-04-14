<?php

include 'conexao.php';

$nome = $_POST['nome'];
$dataNascimento = $_POST['dataNascimento'];
$telefone = $_POST['telefone'];

$query_cadastrar = "INSERT INTO cadastro_pessoas VALUES (
    null,
    '$nome',
    '$dataNascimento',
    '$telefone',
    now()
)";

$cadastrar_formulario = mysqli_query($connex, $query_cadastrar) or die(mysqli_error($connex));


?>