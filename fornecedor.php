<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Fornecedor</title>
        <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="\sistema\style.css">

    <link rel="stylesheet" href="forne.css">

</head>
<body>
    
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastro de Cliente</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cadastro_cliente.php">Cadastro de Cliente</a>
            </li>
            <li class="nav-item">

                <a class="nav-link" href="fornecedor.php">Fornecedor</a>
                <a class="nav-link" href="listar_cliente.php">Relatório Clientes</a>
                
            </li>
            </ul>
        </div>
        </div>
    </div>
    </nav>









<form class="form" action="dado.php" method="post">
<h2 id="formt">Formulário do Fornecedor</h2>
	
    <div class="container">

            

        <div class="row">

        

        <input  type="text" class="col-12" id="nome"  placeholder="NOME" name="nome" >

		
		<input type="text" class="col-5" id="endereco" placeholder="ENDEREÇO" name="endereco">

		
		<input type="nunber" class="col-3" id="numero" placeholder="NUMERO" name="numero">
		
		<input type="text" class="col-3" id="bairro" placeholder="BAIRRO " name="bairro">

		
		<input type="text" class="col-4" id="cidade" placeholder="CIDADE" name="cidade">

		
		<input type="text" class="col-2" id="estado" placeholder="ESTADO" name="estado">

		
		<input type="text" class="col-5" id="cep" placeholder="CEP" name="cep">

		
		<input type="text" class="col-4" id="telefone" placeholder="TELEFONE" name="telefone">

        
        <input type="text" class="col-3" id="cpf" placeholder="CPF" name="cpf">

        
        <input type="email" class="col-4" id="email" placeholder="EMAIL" name="email">

        
        <input class="col-5" id="reset" type="reset" value="Limpar">
        <input class="col-6" id="vai" type="submit" value="Cadastrar">

        </div>

		
    
    </div>
    
    </form>


</body>
</html>