<!doctype html>
<?php
  include('login/protect.php');
?>
<html lang="pt_br">
  <head>
    <title> </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
      <p>Bem vindo, <?php echo $_SESSION['nome']; ?></p>
      <p>
        <a href="login/logout.php">Sair</a>
      </p>
        <h3 class="text-primary my-4">Cadastro Clínica</h3>
    <br>
        <form action="cadastro.php" method="post">
            <label for="">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="digite seu nome" autocomplete = 'off' required>
    <br>
            <label for="">Nascimento:</label>
            <input type="date" name="dataNascimento" class="form-control" placeholder="digite a data de nascimento" autocomplete = 'off'required>
    <br>
            <label for="">Telefone:</label>
            <input type="text" name="telefone" class="form-control" placeholder="digite seu telefone" autocomplete = 'off' required>
    <br>
            <label for="">Paciente/Funcionário:</label>
            <input type="text" name="telefone" class="form-control" autocomplete = 'off' required>
    <br>   
            <input type="submit" value="ENVIAR" class= "btn btn-danger">
        </form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>