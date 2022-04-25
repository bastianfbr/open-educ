<?php
  include 'header.php';
  include 'role.php';

if ($role === "Admin"){
?>

<!-- Ajout de classe -->

<section class ="connexion">
  <main class="form-signin">
  <h1>Ajout</h1>
    <form name="formulaire" method="post" action="">
      
      <div class="form-floating">
        <input type="text" class="form-control" id="niveauAjout" name="niveauAjout" required>
        <label for="niveaux">Niveaux</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" id="nomAjout" name="nomAjout" required>
        <label for="floatingInput">Nom de la classe</label>
      </div>

      <div class="form-floating">
        <input type="number" class="form-control" id="effectifAjout" name="effectifAjout" required>
        <label for="floatingInput">Effectifs</label>
      </div>

      <div class="form-floating">
        <input type="number" class="form-control" id="idEcoleAjout" name="idEcoleAjout" required>
        <label for="floatingInput">Id Ecole</label>
      </div>

      <button class="w-100 btn btn-lg bg-turc" type="submit">Ajouter</button>

      <?php
        if(isset($_POST["niveauAjout"])){
          $niveauAjout=$_POST["niveauAjout"];
          $nomAjout=$_POST["nomAjout"];
          $effectifAjout=$_POST["effectifAjout"];
          $idEcoleAjout=$_POST["idEcoleAjout"];
          $sql = "INSERT INTO classe (niveau, nom, effectif, idEcole)
          VALUES ('$niveauAjout','$nomAjout','$effectifAjout','$idEcoleAjout')";
          $prep = $db->prepare($sql);
          $prep->execute();
        }
      ?>

    </form>
  </main>
</section>


<!-- Suppression de classe -->

<section class ="connexion">
  <main class="form-signin">
  <h1>Suppression</h1>
    <form name="formulaire" method="post" action="">
      

      <div class="form-floating">
        <input type="number" class="form-control" id="idSupp" name="idSupp" required>
        <label for="floatingInput">ID</label>
      </div>

      <button class="w-100 btn btn-lg bg-turc" type="submit">Supprimer</button>

      <?php
        if(isset($_POST["idSupp"])){
          $idSupp=$_POST["idSupp"];
          $sql = "DELETE FROM classe WHERE idClasse='$idSupp'";
          $prep = $db->prepare($sql);
          $prep->execute();
        }
        
      ?>

    </form>
  </main>
</section>


<!-- Modification de classe Admin-->

<section class ="connexion">
  <main class="form-signin">

  <h1>Modification</h1>
    <form name="formulaire" method="post" action="">
      
      <div class="form-floating">
        <input type="text" class="form-control" id="niveauModif" name="niveauModif" required>
        <label for="niveaux">Niveaux</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" id="nomModif" name="nomModif" required>
        <label for="floatingInput">Nom de la classe</label>
      </div>

      <div class="form-floating">
        <input type="number" class="form-control" id="effectifModif"  name="effectifModif" required>
        <label for="floatingInput">Effectifs</label>
      </div>

      <div class="form-floating">
        <input type="number" class="form-control" id="idModif" name="idModif" required>
        <label for="floatingInput">Id Classe</label>
      </div>

      <div class="form-floating">
        <input type="number" class="form-control" id="idEcoleModif" name="idEcoleModif" required>
        <label for="floatingInput">Id Ecole</label>
      </div>

      <button class="w-100 btn btn-lg bg-turc" type="submit">Modifier</button>

      <?php
        if(isset($_POST["idModif"])){
          $niveauModif=$_POST["niveauModif"];
          $nomModif=$_POST["nomModif"];
          $effectifModif=$_POST["effectifModif"];
          $idEcoleModif=$_POST["idEcoleModif"];
          $sql = "UPDATE classe 
              SET niveau ='$niveauModif', nom ='$nomModif', effectif ='$effectifModif', idEcole ='$idEcoleModif'
              WHERE idClasse='$idModif'";
          $prep = $db->prepare($sql);
          $prep->execute();
        }
      ?>

    </form>
  </main>
</section>


<!-- Role Correspondant -->
<?php 
    }else if ($role === "Correspondant") {
      $requete="SELECT idEcole FROM correspondant INNER JOIN compte on correspondant.idCompte = compte.idCompte WHERE correspondant.mail = '".$_SESSION['mail']."'";
      $requeteExe= mysqli_query($db ,$requete);
      $result=mysqli_fetch_array($requeteExe);
      $ecole = $result['idEcole'];
      echo $ecole;
?> 


<!-- Modification classe selon l'ecole d'affectation-->

<section class ="connexion">
  <main class="form-signin">
  <h1>Modification</h1>
  <form name="formulaire" method="post" action="">
    
    <div class="form-floating">
      <input type="text" class="form-control" id="niveauModif" name="niveauModif" required>
      <label for="niveaux">Niveaux</label>
    </div>

    <div class="form-floating">
      <input type="text" class="form-control" id="nomModif" name="nomModif" required>
      <label for="floatingInput">Nom de la classe</label>
    </div>

    <div class="form-floating">
      <input type="number" class="form-control" id="effectifModif"  name="effectifModif" required>
      <label for="floatingInput">Effectifs</label>
    </div>

    <div class="form-floating">
      <input type="number" class="form-control" id="idModif" name="idModif" required>
      <label for="floatingInput">ID</label>
    </div>

    <button class="w-100 btn btn-lg bg-turc" type="submit">Modifier</button>

    <?php
      if(isset($_POST["idModif"])){
        $idModif=$_POST["idModif"];
        $niveauModif=$_POST["niveauModif"];
        $nomModif=$_POST["nomModif"];
        $effectifModif=$_POST["effectifModif"];
        $sql = "UPDATE classe 
        SET  niveau ='$niveauModif', nom ='$nomModif', effectif ='$effectifModif'
          WHERE idClasse='$idModif' AND idEcole='$ecole'";
        $prep = $db->prepare($sql);
        $prep->execute();
      }
    ?>

  </form>
</main>
</section>


<!-- Autres comptes -->

<?php  } else if ($role === "Autres") { ?>
  <p> Autres </p>
<?php } ?>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>