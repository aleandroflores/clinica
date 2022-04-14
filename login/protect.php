<?php
if(!isset($_SESSION)) {
    session_start();
}
    if(!isset($_SESSION['id'])){
        die("Você não pode acessar esta página. Faça o login. <p><a href= \"\clinica\login\login.php\">Entrar</a></p>");
    }
?>