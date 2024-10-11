<?php

require_once("login.php");

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Resenha literária</title>

    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.webp" width="50" height="50" class="d-inline-block align-top" alt="">
        Resenha literária
      </a>
      <ul class="navbar-nav">
      <li class="nav-item"> 
        <button onclick="location.href='index.php'" class="botao-sair" type="button"> Sair </button>
      </li>
     </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Livros mais lidos do mês
            </div>
            
            <div class="card-body">
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Trono de vidro</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Sarah J maas</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Fantasia e Romance</h6>
                  <p class="card-text">Ela é uma assassina, e a melhor de Adarlan. Aprisionada e fraca, 
                    ela está quase perdendo as esperanças, a sentença de morte é iminente, mas a jovem recebe
                     uma proposta inesperada: representar o príncipe em uma competição com lutando contra os mais
                      habilidosos assassinos e larápios do reino.</p>

                </div>
              </div>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Misery</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Sthephen King</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Gênero</h6>
                  <p class="card-text">Paul Sheldon é um escritor famoso, reconhecido por uma série de best-sellers
                     protagonizados pela mesma personagem: Misery Chastain. Annie Wilkes é uma enfermeira aposentada,
                      leitora voraz e obcecada pela história de Misery. Quando Paul sofre um acidente de carro em uma 
                      nevasca, ele é resgatado justamente por Annie, e esse encontro entre fã e autor é o ponto de 
                      partida de uma das tramas mais aterrorizantes de Stephen King</p>

                </div>
              </div>

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