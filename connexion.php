<?php
  include 'header.php';
?>
    
<!-- Section de connexion -->
<section class ="connexion">
  <main class="form-signin">
    <form name="formulaire" method="post" action="verificationConnexion.php">
      <img class="mb-4 text-center" src="./img/open_logo.png" alt="" width="100">

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="mail" required>
        <label for="floatingInput">Email</label>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
        <label for="floatingPassword">Mot de passe</label>
      </div>

      <button class="w-100 btn btn-lg bg-turc" type="submit">Se connecter</button>
      <p class="mt-5 mb-3 text-muted text-center">
        <a href="rgpd.php">RGPD</a>
      </p>
      <p class="mt-5 mb-3 text-muted text-center">&copy; AlsaNum 2022</p>
    </form>
  </main>
</section>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
