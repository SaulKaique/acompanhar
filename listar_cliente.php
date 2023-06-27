<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
        <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="cliente.css">
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

    <!-- download -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

         <div class="container">
            <div class="row" style="margin-top: 100px">
              <div class="row">
                 <h1>Dados do Cliente</h1>
                    <table id="example" class="table table-bordered table-hover display"style="width:100%; margin-top:20px">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Telefone</th>
                            <th>Cidade</th>
                           <th>Ações</th>

                          </tr>
                        </thead>
                        <tbody>


                        
                        <?php
                          include 'conexao.php';
                          $sql = "SELECT * FROM tb_cliente";
                          $pesquisa = mysqli_query($conexao,$sql);

                          while($array = mysqli_fetch_array($pesquisa)){
                                $nome = $array['nm_cliente'];
                                $cpf = $array['cpf'];
                                $telefone = $array['telefone'];
                                $cidade = $array['nm_cidade'];
                            ?>
                            <tr>
                              <td><?php echo $nome?></td>
                              <td><?php echo $cpf?></td>
                              <td><?php echo $telefone?></td>
                              <td><?php echo $cidade?></td>
                              <td><button id="btn01" class="btn btn-warning" style="width:40%; margin-top:5px;" ><i class="fa-solid fa-user-pen"></i></button>
                                <button  id = "btn02"class="btn btn-danger " style="width:40%; margin-top:5px;"> <i class="fa-solid fa-trash" ></i></button>
                            </td>
                            </tr>
                         <?php }?>




                        
                         
                        </tbody>
                    </table>
               </div>
            </div>
        </div>

<script type="text/javascript">
$("#telefone").mask("(00) 00000-0000");
$("#cpf").mask("000.000.000-00");
$("#rg").mask("00.000.000-0");
$("#cep").mask("00000-000");
</script>

</body>
</html>