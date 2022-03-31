<?php //http://www.codeurjava.com/2016/12/formulaire-de-login-avec-html-css-php-et-mysql.html
      session_start();
      if(isset($_POST['mail']) && isset($_POST['password']))
      {
        
        //Connexion à la base de données:
        $db_user = "root";
        $db_pass= "root";
        $db_name= "openeduc";
        $db_host = "localhost";
        $db = mysqli_connect($db_host, $db_user, $db_pass, $db_name)
        or die('could not connect to database');

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