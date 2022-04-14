<?php
include('../conexao.php');

if(isset($_POST['teste']) || isset($_POST['senha'])) {
      
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $connex->real_escape_string($_POST['email']);
        $senha = $connex->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $connex->query($sql_code) or die("Falha na execução do código SQL; " . $connex->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
                            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ../novo.php");

        } else {
            echo "Falha ao logar! Email ou senha incorretos";
        }
    }
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body id="fundo">
  <div class="container" id= "telalogin">
    <h1>Acesse sua conta</h1>
    <div class="card"> 
    <!-- <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card"> -->
    <div class="card-body">
    <form action="" method="POST">
    <div class="form-group">
        <label >E-mail</label>
        <input type="email" name= 'email' class="form-control" id="" aria-describedby="emailHelp" placeholder="Seu email" autocomplete = "off">
    </div>
    <div class="form-group">
        <label>Senha</label>
        <input type="password" name= 'senha' class="form-control" id="" placeholder="Insira a senha">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
    </form>
    </div>
    </div>
</div>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>