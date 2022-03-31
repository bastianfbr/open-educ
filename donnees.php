<?php
  session_start();
  if(isset($_GET['deconnexion']))
  { 
      if($_GET['deconnexion']==true)
      {  
        session_unset();
        header("location:index.php");
      }
  }  
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OpenEduc - Données</title>
    <link rel="icon" type="image/png" href="./img/white_logo.png" />

    <!-- Bootstrap core CSS -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-static/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS et Polices -->
<link href="./css/style.css" rel="stylesheet">
<link href="http://fonts.cdnfonts.com/css/kollektif?styles=28733" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
   </head>

  <body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-turc mb-4 logo">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="./img/white_logo.png" width="100" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link h3" href="projet.php">Projet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h3" href="partenaires.php">Partenaires</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h3 active" href="donnees.php">Données</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h3" href="rgpd.html">RGPD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h3" href="admin.php">Administration</a>
        </li>
        <!-- Affichage se connecter ou se deconnecter-->
        <?php if(isset($_SESSION['mail'])){
          ?>
        <li class="nav-item">
          <button onclick="window.location.href = 'index.php?deconnexion=true';" class="w-100 btn btn-lg bg-light" type="submit">Déconnexion</button>
        </li>
          <?php }
          else{ ?>
        <li class="nav-item">
          <button onclick="window.location.href = 'connexion.php';" class="w-100 btn btn-lg bg-light" type="submit">Se connecter</button>
        </li>
            <?php } ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
      <div class="col">
    <main class="container modal-header">
  <div class="bg-light p-5 rounded">
    <h1 class="titre">Choix de l'école</h1>
    <p class="lead texte">Choisissez l'école pour consulter les classes</p>

    <p class="align-content-end texte"> 
      <ul class="list-group">
        <li><button type="button" class="btn btn-primary">ECOLE PRIMAIRE PUBLIQUE DES FONTAINES</button> </li>
        <li><button type="button" class="btn btn btn-light">ECOLE ELEMENTAIRE PUBLIQUE CHARLES SPINDLER</button></li>
        <li><button type="button" class="btn btn btn-light">ECOLE ELEMENTAIRE PUBLIQUE GROUPE SCOLAIRE DU ROSENMEER</button></li>
</ul> </p>
    </div>
</main>
  </div>
  <div class="col">
    <main class="container modal-header">
  <div class="bg-light p-5 rounded">
    <h1 class="titre">Un projet AlsaNum</h1>
    <p class="lead texte">&copy; AlsaNum 2022</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Niveau</th>
      <th scope="col">Nom de la classe</th>
      <th scope="col">Effectif</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>CP</td>
      <td>CP Mme Borleau </td>
      <td>20</td>
    </tr>
  </tbody>
</table>
    </div>
</main>
  </div>
</div>
</div>




    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
