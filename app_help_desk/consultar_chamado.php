<?php require_once ("login.php"); ?>

<?php 
$arquivo = fopen('../../app_help_desk/registro.txt' , 'r');

while(!feof($arquivo)) {
  $registro = fgets($arquivo);
  $chamados[] = $registro;
}

// echo '<pre>';
// print_r($chamados);
// echo '</pre>';
?>

<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>Emanuela</title>

    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="./logo.webp" width="50" height="50" class="d-inline-block align-top" alt="">
        Entre páginas
      </a>
      <ul class="navbar-nav">
          <li class="nav-item">
          <button onclick="location.href='logoff.php'"class="botao-sair" type="button"> Sair </button>
          </li>
        </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Resenhas
            </div>
           
            <div class="card-body">

            <?php

              foreach($chamados as $chamado){
          
              $chamado_dados = explode ('#', $chamado);

              if(count($chamado_dados) < 3 ){
                continue;
              }

              // echo '<pre>';
              // print_r($chamado_dados);
              // echo '</pre>';

              
              ?>
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                <h5 class="card-title"> <?php echo $chamado_dados[0]; ?>
              </h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamado_dados[1]; ?></h6>
                  <p class="card-text"><?php echo $chamado_dados[2]; ?></p>
                </div>
              </div>
    <?php }
              ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="painel.php">Voltar</a>
                  
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
