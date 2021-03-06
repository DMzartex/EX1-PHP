<?php 
session_start();
require 'function.php';
if(empty($_SESSION['nb_devine'])){
  $_SESSION['nb_devine'] = GenerateNb();
}

if(!empty($_GET['nb'])){
  $n = (int)$_GET['nb'];
  $devine = (int)$_SESSION['nb_devine'];
  $text = deviner_nombre($devine,$n);
}


?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Nombre à deviner</title>  
  </head>
  <body>
    <h1>Nombre à deviner !</h1>

    <?php require 'header.php' ?>

    <form action="jeu.php" method="get">
          <div class="form-group">
              <label from="user_name">Entrer un nombre svp !</label>
              <input class="form-control" type="number" id="nb" name="nb">
              <input class="btn btn-primary mb-2" type="submit" value="Entrer">
          </div>
    </form>

    <?php if(!empty($_GET['nb'])): ?>

    <?php if(!alert()):?>
      <div class="alert alert-danger"><?= $text ?></div>
    <?php else: ?>
      <div class="alert alert-success"><?= $text ?></div>

    <?php endif; ?>

    <?php endif; ?>

    <a class="btn btn-primary" href="">Rejouer</a>

    <?php require 'footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>