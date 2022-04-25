<?php
    $requete="SELECT role FROM Compte WHERE mail = '".$_SESSION['mail']."' ";
    $exec_requete = mysqli_query($db ,$requete);
    $reponse = mysqli_fetch_array($exec_requete);
    $role = $reponse['role'];
?>
