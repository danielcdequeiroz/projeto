<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Projeto</title>  
    <link rel="shortcut icon" href="css/img/icone.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/estilo5.css">
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
      <li class="nav-item">
        <a class="nav-link" href="editar.php">Editar</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="exibir.php">Relatório</a>
      </li>     
    </ul>
  </div>
 </div>
</nav>

<div class="table-responsive" style="margin-top: 5%;">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Registro no Banco de Dados</th>       
        </tr>
        </thead>
</table>
</div>
<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	include 'banco.php';
	$query = "SELECT * from cadastro";
	$run = $con->query($query);
	while($row = $run->fetch_array()) :
?>
	<div class="texto">
		<span style="color: #0078D7;"><?php echo $row['nome']; ?> :</span>
		<span style="color: #000080"><?php echo $row['sexo']; ?></span>
		<span style="color: #000080"><?php echo $row['cidade']; ?></span>
	
	</div>
<?php endwhile; ?>

<?php
include 'banco.php';

$sql = mysqli_query($con, "SELECT count(*) as total from cadastro") or die( 
  mysqli_error($con) 
);
 
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
  echo "Número de contatos no banco de dados: ".$aux["total"]."<br />"; 
}
?>

<?php
include 'banco.php';

$sql = mysqli_query($con, "SELECT sexo,count(*) as total from cadastro group by sexo") or die( 
  mysqli_error($con) 
);
 
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
  echo "Sexo: ".$aux["sexo"]."<br />";
  echo "Quantidade: ".$aux["total"]."<br />";
}
?>

<?php
include 'banco.php';
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

$sql = mysqli_query($con,"SELECT MONTHNAME(data) as mes,cidade,sexo, count(*) as total from cadastro group by cidade,sexo,data order by cidade") or die( 
  mysqli_error($con) 
);
  
while($aux = mysqli_fetch_assoc($sql)) { 

  echo "-----------------------------------------<br />"; 
  echo "Cidade: ".$aux["cidade"]."<br />";
  echo ucfirst( strftime("Mês de: %B <br />", strtotime($aux["mes"])  ) );
  echo "Pessoas cadastradas nessa data: ".$aux["total"]."<br />";
  echo "Sexo: ".$aux["sexo"]."<br />"; 
}
?>

<?php
include 'banco.php';

$sql = mysqli_query($con, "SELECT nome, count(*) as total, cidade from cadastro group by cidade") or die( 
  mysqli_error($con) 
);
 
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
  echo "Cidade: ".$aux["cidade"]."<br/>";
  echo "Quantidade total de cadastros nessa cidade: ".$aux["total"]."<br/><br/>"; 
}
?>

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
