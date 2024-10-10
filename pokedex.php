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

    <!-- Inicio dos pokemon-->
    <div class="row">
      <div class="col-sm-3">

        <div class="card" style="width: 18rem;">
          <img src="src/aegislash.avif" class="card-img-top" alt="Aegislash">
          <div class="card-body">
            <p class="card-text">Aegislash é um Pokémon que pode mudar entre formas de ataque e defesa.</p>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="src/amaura.avif" class="card-img-top" alt="Amaura">
          <div class="card-body">
            <p class="card-text">Amaura é um Pokémon de gelo que adora brincar na neve.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="src/aromatisse.avif" class="card-img-top" alt="Aromatisse">
          <div class="card-body">
            <p class="card-text">Aromatisse é conhecido por seu aroma doce e sua natureza gentil.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="src/aurorus.avif" class="card-img-top" alt="Aurorus">
          <div class="card-body">
            <p class="card-text">Aurorus emite uma beleza deslumbrante com seu corpo de gelo.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="src/avalugg.avif" class="card-img-top" alt="Avalugg">
          <div class="card-body">
            <p class="card-text">Avalugg é um Pokémon que se assemelha a um iceberg e é muito resistente.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="src/bunnelby.avif" class="card-img-top" alt="Bunnelby">
          <div class="card-body">
            <p class="card-text">Bunnelby é rápido e adora cavar buracos.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="src/carbink.avif" class="card-img-top" alt="Carbink">
          <div class="card-body">
            <p class="card-text">Carbink é um Pokémon que protege as pedras preciosas com dedicação.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="src/chespin.avif" class="card-img-top" alt="Chespin">
          <div class="card-body">
            <p class="card-text">Chespin é um Pokémon que adora se esconder entre as folhas.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="src/chesnaught.avif" class="card-img-top" alt="Chesnaught">
          <div class="card-body">
            <p class="card-text">Chesnaught é um defensor feroz, sempre protegendo seus aliados.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="src/clawitzer.avif" class="card-img-top" alt="Clawitzer">
          <div class="card-body">
            <p class="card-text">Clawitzer é um Pokémon que ataca com poderosos canhões de água.</p>
          </div>
        </div>
      </div>
        
      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
          <img src="src/clauncher.avif" class="card-img-top" alt="Clauncher">
          <div class="card-body">
            <p class="card-text">Clauncher é ágil e utiliza suas pinças para capturar presas.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/dedenne.avif" class="card-img-top" alt="Dedenne">
            <div class="card-body">
              <p class="card-text">Dedenne é um Pokémon elétrico que adora se socializar.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/delphox.avif" class="card-img-top" alt="Delphox">
            <div class="card-body">
              <p class="card-text">Delphox é sábio e poderoso, sempre usando seus poderes psíquicos.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/doublade.avif" class="card-img-top" alt="Doublade">
            <div class="card-body">
              <p class="card-text">Doublade é um Pokémon que luta com suas espadas gêmeas.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="src/espurr.avif" class="card-img-top" alt="Espurr">
          <div class="card-body">
            <p class="card-text">Espurr é um Pokémon tímido que esconde seu poder psíquico.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="src/fennekin.avif" class="card-img-top" alt="Fennekin">
          <div class="card-body">
            <p class="card-text">Fennekin é conhecido por suas habilidades de fogo e seu espírito curioso.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/flabebe.avif" class="card-img-top" alt="Flabébé">
            <div class="card-body">
                <p class="card-text">Flabébé adora flores e tem um forte laço com elas.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/fletchinder.avif" class="card-img-top" alt="Fletchinder">
            <div class="card-body">
                <p class="card-text">Fletchinder é rápido e habilidoso em voar em altas velocidades.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/fletchling.avif" class="card-img-top" alt="Fletchling">
            <div class="card-body">
                <p class="card-text">Fletchling é um Pokémon alegre que gosta de cantar e voar.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/florges.avif" class="card-img-top" alt="Florges">
            <div class="card-body">
                <p class="card-text">Florges é conhecido por sua beleza e habilidade em cuidar de flores.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/furfrou.avif" class="card-img-top" alt="Furfrou">
            <div class="card-body">
                <p class="card-text">Furfrou é um Pokémon que adora se manter bem cuidado e estiloso.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/gogoat.avif" class="card-img-top" alt="Gogoat">
            <div class="card-body">
                <p class="card-text">Gogoat é um Pokémon forte e confiável que gosta de escalar montanhas.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/goodra.avif" class="card-img-top" alt="Goodra">
            <div class="card-body">
                <p class="card-text">Goodra é gentil e protetor, sempre cuidando dos seus amigos.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/goomy.avif" class="card-img-top" alt="Goomy">
            <div class="card-body">
                <p class="card-text">Goomy é um Pokémon tímido que adora a umidade e ambientes suaves.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/gourgeist.avif" class="card-img-top" alt="Gourgeist">
            <div class="card-body">
                <p class="card-text">Gourgeist adora brincar com as crianças durante o Halloween.</p>
            </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
          <img src="src/greninja.avif" class="card-img-top" alt="Greninja">
          <div class="card-body">
            <p class="card-text">Greninja é famoso por sua velocidade e habilidades furtivas.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/hawlu.jpg" class="card-img-top" alt="Hawlucha">
            <div class="card-body">
                <p class="card-text">Hawlucha combina a luta livre com habilidades de Pokémon.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/heliolisk.avif" class="card-img-top" alt="Heliolisk">
            <div class="card-body">
                <p class="card-text">Heliolisk é um Pokémon elétrico que brilha sob a luz do sol.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/helioptile.avif" class="card-img-top" alt="Helioptile">
            <div class="card-body">
                <p class="card-text">Helioptile usa a luz do sol para aumentar sua energia.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/honedge.avif" class="card-img-top" alt="Honedge">
            <div class="card-body">
                <p class="card-text">Honedge é um Pokémon que possui uma espada como corpo.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/inkay.avif" class="card-img-top" alt="Inkay">
            <div class="card-body">
                <p class="card-text">Inkay é um Pokémon que pode inverter sua gravidade ao evoluir.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/malamar.avif" class="card-img-top" alt="Malamar">
            <div class="card-body">
                <p class="card-text">Malamar usa seus poderes hipnóticos para confundir seus inimigos.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/meowstic.avif" class="card-img-top" alt="Meowstic">
            <div class="card-body">
                <p class="card-text">Meowstic é um Pokémon psíquico que usa sua inteligência em batalha.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/noibat.avif" class="card-img-top" alt="Noibat">
            <div class="card-body">
                <p class="card-text">Noibat é um Pokémon que utiliza a ultrassonografia para se orientar.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/noivern.avif" class="card-img-top" alt="Noivern">
            <div class="card-body">
                <p class="card-text">Noivern é um Pokémon veloz que voa em altitudes elevadas.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/pachirisu.avif" class="card-img-top" alt="Pachirisu">
            <div class="card-body">
                <p class="card-text">Pachirisu é um Pokémon elétrico adorável e brincalhão.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/pangoro.avif" class="card-img-top" alt="Pangoro">
            <div class="card-body">
                <p class="card-text">Pangoro é um Pokémon forte e protetor de seus amigos.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/pumpkaboo.avif" class="card-img-top" alt="Pumpkaboo">
            <div class="card-body">
                <p class="card-text">Pumpkaboo adora o Halloween e gosta de pregar peças.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/pyroar.avif" class="card-img-top" alt="Pyroar">
            <div class="card-body">
                <p class="card-text">Pyroar é um Pokémon majestoso que ruge como um verdadeiro rei.</p>
            </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
          <img src="src/quilladin.avif" class="card-img-top" alt="Quilladin">
          <div class="card-body">
            <p class="card-text">Quilladin é resistente e adora proteger seu território.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/rotom.avif" class="card-img-top" alt="Rotom">
            <div class="card-body">
                <p class="card-text">Rotom pode assumir diferentes formas, adaptando-se ao ambiente.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/sliggoo.avif" class="card-img-top" alt="Sliggoo">
            <div class="card-body">
                <p class="card-text">Sliggoo é um Pokémon que adora ambientes úmidos e tranquilos.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/slurpuff.avif" class="card-img-top" alt="Slurpuff">
            <div class="card-body">
                <p class="card-text">Slurpuff tem um ótimo olfato e é um excelente cozinheiro.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/spritzel.avif" class="card-img-top" alt="Spritzee">
            <div class="card-body">
                <p class="card-text">Spritzee é conhecido por seu aroma encantador e sua personalidade doce.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/swirlix.avif" class="card-img-top" alt="Swirlix">
            <div class="card-body">
                <p class="card-text">Swirlix é um Pokémon fofo que se alimenta de doces.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/talonflame.avif" class="card-img-top" alt="Talonflame">
            <div class="card-body">
                <p class="card-text">Talonflame é um Pokémon rápido que brilha como uma chama.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/trevenant.avif" class="card-img-top" alt="Trevenant">
            <div class="card-body">
                <p class="card-text">Trevenant é o guardião das florestas e protege a natureza.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/tyrannotum.avif" class="card-img-top" alt="Tyrantrum">
            <div class="card-body">
                <p class="card-text">Tyrantrum é um poderoso Pokémon que se parece com um dinossauro.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/tyrunt.avif" class="card-img-top" alt="Tyrunt">
            <div class="card-body">
                <p class="card-text">Tyrunt é um Pokémon adorável que sonha em ser grande e forte.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/xerneas.avif" class="card-img-top" alt="Xerneas">
            <div class="card-body">
                <p class="card-text">Xerneas é conhecido como o Pokémon da vida, irradiando energia positiva.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/yveltal.avif" class="card-img-top" alt="Yveltal">
            <div class="card-body">
                <p class="card-text">Yveltal representa a destruição e é temido por muitos.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/zygarde.avif" class="card-img-top" alt="Zygarde">
            <div class="card-body">
                <p class="card-text">Zygarde é o guardião do equilíbrio e pode mudar de forma.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/diancie.avif" class="card-img-top" alt="Diancie">
            <div class="card-body">
                <p class="card-text">Diancie é um Pokémon raro que brilha como um diamante.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/hoopa.avif" class="card-img-top" alt="Hoopa">
            <div class="card-body">
                <p class="card-text">Hoopa tem o poder de abrir portais e viajar entre dimensões.</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="src/volcanion.avif" class="card-img-top" alt="Volcanion">
            <div class="card-body">
                <p class="card-text">Volcanion é um Pokémon místico que controla o fogo e a água.</p>
            </div>
        </div>
      </div>

    </div>
  </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</body>
</html>