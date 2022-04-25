<?php
  include 'header.php';
  include 'choixEcole.php'
?>

  <div class="container">
    <div class="row">
      <div class="col">
        <main class="container modal-header">
          <div class="bg-light p-5 rounded">
            <h1 class="titre">Choix de l'école</h1>
            <p class="lead texte">Choisissez l'école pour consulter les classes</p>
            <p class="align-content-end texte"> 
              <ul class="list-group">
                <li><button onclick="window.location.href = 'donnees.php?fontaines=true';" type="button" class="btn btn-primary">ECOLE PRIMAIRE PUBLIQUE DES FONTAINES</button> </li>
                <li><button onclick="window.location.href = 'donnees.php?spindler=true';" type="button" class="btn btn btn-light">ECOLE ELEMENTAIRE PUBLIQUE CHARLES SPINDLER</button></li>
                <li><button onclick="window.location.href = 'donnees.php?rosemeer=true';" type="button" class="btn btn btn-light">ECOLE ELEMENTAIRE PUBLIQUE GROUPE SCOLAIRE DU ROSENMEER</button></li>
              </ul> 
            </p>
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

          <!--Visualisation de données-->
          <?php
          if(isset($ecole)){
            $requete = "SELECT * FROM Classe WHERE idEcole='".$ecole."'";
            $result = mysqli_query($db,$requete);
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){ 
          ?>

          <tbody>
            <tr>
              <th scope="row"><?php echo $row[0] ?></th>
              <td><?php echo $row[1] ?></td>
              <td><?php echo $row[2] ?></td>
              <td><?php echo $row[3] ?></td>
            </tr>
          </tbody>
          <?php } }?>

        </table>
      </div>
    </main>
  </div>
  </div>
</div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  
  </body>
</html>