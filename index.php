<?php  
$pdo = new PDO('mysql:host=localhost;dbname=projeto_bootstrap','root','');
$sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
$sobre->execute();
$sobre = $sobre->fetch()['sobre'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap WebSite</title>
  <!-- Bootstrap -->
  <link href="_css/bootstrap.min.css" rel="stylesheet">
  <link href="_css/style.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site desenvolvido para por em pratica conhecimentos adquiridos no curso de bootstrap" />
  <meta name="keywords" content="bootstrap, desenvolvimento web, analise de sistemas" />
  <meta name="author" content="Alcenir da Costa"/>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><?php echo htmlentities('<'); ?>Logomarca<?php echo htmlentities('>');  ?></a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#home">Home</a></li>
          <li><a href="#sobre">Sobre</a></li>
          <li><a href="#contato">Contato</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <div id="home" class="box">
    <section class="banner">
      <div class="overlay"></div>
      <div class="container chamada-banner">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2><?php echo htmlentities('<'); ?>Logomarca<?php echo htmlentities('>');  ?></h2>
            <p>Empresa voltada para desenvolvimento web e solução digital</p>
            <a href="">Saiba Mais!</a>
          </div><!--col-md-12-->
        </div><!--row-->
      </div>
    </section>
    <section class="cadastro-lead">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6">
            <h2>Entre na nossa lista e receba novidades e promoções!</h2>
          </div>
          <div class="col-md-6">
            <form method="post">
              <input type="text" name="nome" /><input type="submit" value="Enviar" />
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="depoimento text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Depoimento</h2>
            <blockquote>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget lorem varius, pellentesque ipsum convallis, suscipit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis orci quam. Phasellus dictum erat at nibh bibendum, eget porta urna pretium. Maecenas vel augue massa. Nulla facilisi. Nulla a suscipit quam, eu pharetra justo."</p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    <section id="sobre" class="diferenciais text-center">
      <h2>Um pouco sobre nossa empresa</h2>
      <div class="container diferenciais-container">
        <div class="row"><?php echo $sobre; ?></div>
      </div>
    </section>
    <section class="equipe">
      <h2>Nossa equipe</h2>
      <div class="container equipe-container">
        <div class="row">
          <?php  
          $selecionarMembros = $pdo->prepare("SELECT * FROM `tb_equipe`");
          $selecionarMembros->execute();
          $membros = $selecionarMembros->fetchAll();
          for($i = 0; $i< count($membros); $i++){
            ?>
            <div class="col-md-6">
              <div class="equipe-single">
                <div class="row">
                  <div class="col-md-2">
                    <div class="user-picture">
                      <div class="user-picture-child"><img src="_images/img (<?php echo $i+1; ?>).jpg" /></div>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <h3><?php echo $membros[$i]['nome_membro']; ?></h3>
                    <p><?php echo $membros[$i]['descricao']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php  } ?>
        </div>
      </div><!--equipe-container-->
    </section>
    <section id="contato" class="final-site">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Fale conosco</h2>
            <form>
              <div class="form-group">
                <label for="email">Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome">
              </div>
              <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="email">Mensagem:</label>
                <textarea class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="col-md-6">
            <h2>Nossos planos</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>Plano Diário</th>
                  <th>Plano Semanal</th>
                  <th>Plano Anual</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>R$199,00</td>
                  <td>R$299,00</td>
                  <td>R$399,00</td>
                </tr>
                <tr>
                  <td>R$199,00</td>
                  <td>R$299,00</td>
                  <td>R$399,00</td>
                </tr>
                <tr>
                  <td>R$199,00</td>
                  <td>R$299,00</td>
                  <td>R$399,00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <p class="text-center">Todos os direitos reservados!</p>
    </footer>
  </div><!--box-->
  <script src="_js/jquery.js"></script>
  <script src="_js/bootstrap.min.js"></script>
  <script src="_js/menu_scroll.js"></script>
</body>
</html>