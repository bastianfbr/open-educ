<?php
  include 'header.php';

  $requete = "SELECT * FROM Ecole";

  $result = mysqli_query($db,$requete);

  while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){ 

?>

<div class="container" style="margin-bottom:100px;">
    <div class="card mb-3 border border-primary" id="Ecole1">
        <div class="card-body">
                <h5 class="card-title">Nom : <?php echo $row[3] ?> </h5>
                <p class="card-text">Identifiant : <?php echo $row[2] ?> </p>
                <p class="card-text">Adresse : <?php echo $row[4] ?> </p>
                <p class="card-text">Téléphone : <?php echo $row[5] ?> </p>
                <p class="card-text">email : <?php echo $row[6] ?> </p>
        </div> 
    </div>
</div>

<?php } ?>