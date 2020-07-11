<!DOCTYPE html>
<html lang="pt-br">
    <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 	<title>Projeto</title>

	<link rel="stylesheet" type="text/css" href="css/estilo3.css">
    <link rel="shortcut icon" href="css/img/icone.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
   
</head>
<body>

  <nav class="navbar navbar-expand-md navbar navbar-dark fixed-top"style="background-color: black;">
     <a class="navbar-brand" href="#">Projeto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
           <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">    
                    <li class="nav-item active">
                    <a class="nav-link" href="cadastro.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="editar.php">Editar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="exibir.php">Relatório</a>
                    </li>
                </ul>
           </div>
   </nav>

	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Cadastrar</h3>	
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="post" action="salvar.php">
					<label class="control-label">Nome</label><br>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required="required">
						
					</div>
				
					<label class="control-label">Sexo</label><br>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
	                     <select class="form-control" name="sexo" id="teste" required="required">
                         <option value="" selected>Selecione</option>
                         <option value="Masculino">Masculino</option>
                         <option value="Feminino">Feminino</option>
                        </select>
					    </div>

					<label class="control-label">Data</label><br>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="date" class="form-control" name="data" type="date" required="required">
					</div>

					<label class="control-label">Cidade</label><br>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" name="cidade" placeholder="Digite a cidade" required="required">
					</div>

					<div class="form-group">
						<input type="submit" name="register" value="Cadastrar" class="btn btn-info login_btn">
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>

<footer>
              <div class="text-white bg-dark" draggable="true" >
                <div class="container">
                  <div class="row">
                    <div class="p-5 col-md-4">
                        <h4 class="mb-4 marge">Projeto desenvolvido por</h4>  
                        <p class="text-center">Nome: Daniel Cunha de Queiroz</p>            
                     </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mt-3">
                      <p class="text-center">© Copyright 2020 Projeto - Todos os Direitos Reservados. </p>
                    </div>
                  </div>
                </div>
             
</footer>

<script type="text/javascript">
       document.getElementById('teste')[0].selected = "selected"; 
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>