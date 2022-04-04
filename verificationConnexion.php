<?php //http://www.codeurjava.com/2016/12/formulaire-de-login-avec-html-css-php-et-mysql.html
      include 'connexionDB.php';
      if(isset($_POST['mail']) && isset($_POST['password']))
      {

        // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
        // pour éliminer toute attaque de type injection SQL et XSS
        $mail = mysqli_real_escape_string($db ,htmlspecialchars($_POST['mail'])); 
        $password = mysqli_real_escape_string($db ,htmlspecialchars($_POST['password']));
        
        if($mail !== "" && $password !== "")
          {
              $requete = "SELECT count(*) FROM compte where 
                    mail = '".$mail."' and mdp = '".$password."' ";
              $exec_requete = mysqli_query($db ,$requete);
              $reponse      = mysqli_fetch_array($exec_requete);
              $count = $reponse['count(*)'];

              if($count!=0) // nom d'utilisateur et mot de passe correctes
              {
                $_SESSION['mail'] = $mail;
                header('Location: index.php');
              }
              else
              {
                header('Location: connexion.html'); // utilisateur ou mot de passe incorrect
              }
          }
        else
          {
            header('Location: connexion.html'); // utilisateur ou mot de passe vide
          }
      }
      else
      {
        header('Location: connexion.html'); // utilisateur ou mot de passe vide
      }
      //mysqli_close($db); // fermer la connexion mis de cote suite a des bugs
    ?>