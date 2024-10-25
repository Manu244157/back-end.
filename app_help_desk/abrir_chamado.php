<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>Entre páginas</title>

    
    <link rel="stylesheet" type="text/css" href="bootstrap.css">  
    <link rel="stylesheet" type="text/css" href="style.css">
    
    </style>
  </head>

  <body>
    
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.webp" width="50" height="50" class="d-inline-block align-top" alt="">
        Entre páginas
      </a>
      <ul class="navbar-nav">
      <li class="nav-item"> 
        <button onclick="location.href='entrar.php'" class="botao-sair" type="button"> Sair </button>
      </li>
     </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Faça a resenha do livro aqui
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form action="registra_chamada.php" method="POST">
                    <div class="form-group">
                      <label>Titulo</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Gênero</label>
                      <select name="genero" class="form-control">
                        <option>Romance</option>
                        <option>Fantasia</option>
                        <option>Ficção</option>
                        <option>Aventura</option>
                        <option>Drama</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descriçao</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
              
                       <a class="btn btn-lg btn-warning btn-block" href="painel.php">Voltar</a> 
            
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
  
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>