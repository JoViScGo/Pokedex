<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex Kalos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
      a{
        color: black;
      }
      a:hover{  
        color: rgb(189, 189, 189);
      }
      .brownaside{
        background-color: brown;
      }
      body{
            background-color: lightgray;
            align-items: center;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        .cinza{
            background-color: gray;
            border: 1px solid;
        }
        .maior{
            justify-content: center;
            min-height: 95vh;
        }
        .telatoda{
            min-width: 100vw;
            min-height: 100vh;
        }
        .arredondada{
          border-radius: 50%;
          height: 50%;
        }
        .textomaior{
          font-size: 400%;
          font-weight: bolder;
        }
        .bold{
          font-weight: bolder;
        }
        body{
          background-color: gray;
        }
        .vertical{
          display: flex;
          flex-direction: column;
        }
        .color{
          background-color: brown;
          color: black;
        }
        .color:hover{
          color: rgb(189, 189, 189);
        }
        .color2{
          background-color: rgb(189, 189, 189);
          color: black;
        }

    </style>
</head>

<body>
  <div class="container telatoda">
    <div class="row">
        <div class="col-sm-12 brownaside">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="pagina_Inicial.php">Página Inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="treinador.php">Treinador</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pokedex.php">Pokedex</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro.php">Cadastrar</a>
            </li>
          </ul>
        </div>
    </div>

    <!-- <div class="row vertical">
      <h1 class="textomaior">Cadastro de pokemons</h1>
      <h2>Esta página tem por objetivo cadastrar novos pokemons encontrados durante a sua jornada.</h2>
      <div>
        <div class="input-group mb-3">
          <span class="input-group-text color" id="basic-addon1">NOME</span>
          <input type="text" class="form-control color2" placeholder="Nome do pokemon" aria-label="Username" aria-describedby="basic-addon1">
        </div>  

        <div class="input-group mb-3">
          <span class="input-group-text color" id="basic-addon1">TIPO</span>
          <input type="text" class="form-control color2" placeholder="Tipo do pokemon" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text color" id="basic-addon1">TAMANHO</span>
          <input type="text" class="form-control color2" placeholder="Tamanho do pokemon" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <button class="btn btn-danger bold color" type="button" onClick="window.location.reload();">Salvar</button>
      </div>

    </div> -->

    <div class="row vertical">
      <form method = "post">
        <label for="nome"><h1 class="textomaior">Cadastrar Novo Pokemon</h1></label><br>
        <div class="input-group mb-3">
          <span class="input-group-text color" id="basic-addon1">NOME</span>
          <input type="text" class="form-control color2" id = "nome" name = "nome"><br>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text color" id="basic-addon1">TIPO</span>
          <input type="text" class="form-control color2" id = "tipo" name = "tipo"><br>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text color" id="basic-addon1">TAMANHO</span>          
          <input type="text" class="form-control color2" id = "tamanho" name = "tamanho"><br>
        </div>

        <button class="btn btn-danger bold color" type="submit" value="salvar">Salvar</button>
        <!-- <input type="submit" value="Enviar"> -->
      </form>
    </div>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $nome = htmlspecialchars($_POST["nome"]);
      $tipo = htmlspecialchars($_POST["tipo"]);
      $tamanho = htmlspecialchars($_POST["tamanho"]);

    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      echo "<h4>Nome do pokemon cadastrado: $nome</h4>";
      echo "<h4>Tipo do pokemon cadastrado: $tipo</h4>";
      echo "<h4>Tamanho do pokemon cadastrado: $tamanho</h4>";
    }
    
    ?>

  </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</body>
</html>