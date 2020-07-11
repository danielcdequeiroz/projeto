<?php
session_start();
include_once("banco.php");
$result_usuarios = "SELECT * FROM cadastro";
$resultado = mysqli_query($con, $result_usuarios);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Projeto</title>  
    <link rel="shortcut icon" href="css/img/icone.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/estilo4.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>

  <nav class="navbar navbar-expand-md navbar navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Projeto</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">    
      <li class="nav-item">
        <a class="nav-link" href="cadastro.php">Cadastrar</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="editar.php">Editar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="exibir.php">Relatório</a>
      </li>      
    </ul>
  </div>      
    </div>
  </nav>

<?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
     }
?>

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Função</th>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Cidade</th>
            <th>Data</th>       
        </tr>
        </thead>

        <tbody>
        <?php while($exibe = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td>
                <a href="alterar.php?codcontato=<?php echo $exibe['codcontato']; ?>">Editar</a>
                <a href="delete.php?codcontato=<?php echo $exibe['codcontato']; ?>">Deletar</a>
            </td>
            <td><?php echo $exibe['nome']; ?></td>
            <td><?php echo $exibe['sexo']; ?></td>
            <td><?php echo $exibe['cidade']; ?></td>
            <td><?php echo $exibe['data']; ?></td>  
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<footer class="footer">
              <div class="text-white bg-dark" draggable="true" >
                <div class="container">
                  <div class="row">
                    <div class="p-5 col-md-3">                        
                      <h4 class="mb-4 marge">Projeto</h4>                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mt-3">
                      <p class="text-center">© Copyright 2020 Projeto - Todos os Direitos Reservados. </p>
                    </div>
                  </div>
                </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
       
</body>
</html>