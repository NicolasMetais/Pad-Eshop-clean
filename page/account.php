<!DOCTYPE html>
<html lang="en">
<?php include("../constructor/head.php"); ?>
    <body>
    <?php include("../constructor/menu.php"); ?>
  <!------------ shiipppppppping -------->
<!--   
  <div class="container tab-shipping">
   
    <ul class="list-group list-group-horizontal-xl">
      <li class="list-group-item">Free shipping
        <span>
          <i class="fas fa-shipping-fast"></i>
        </span>
      </li>
      <li class="list-group-item">30 days Returns</li>
      <li class="list-group-item">Next Day Dispatch
        <span>
          <i class="fas fa-clock"></i>
        </span>
      </li>
    </ul>
  </div>
  <hr/> -->
  <!-------- MAIN SignUP -------->
  <div class="main-layout">
    <div id="loginClient" class="container">
      <h2>Créer un compte</h2>
      <form action="">
        <input type="hidden" name='form_type' value="create_customer">
        <input type="hidden" name='utf8' value="Y">

        <div id="first_name" class="clearfix form-group">
          <label for="firstname" class="login">Prénom</label>
          <input type="text" class="form-control" id="firstname" aria-describedby="firstname" placeholder="Prénom">
        </div>

        <div id="last_name" class="form-group">
          <label for="last_name" class="login">Nom</label>
          <input type="text" class="form-control" id="lastname" aria-describedby="lastname" placeholder="Nom">
        </div>

        <div id="email" class="clearfix form-group">
          <label for="email" class="login">Email</label>
          <input type="text" class="form-control" id="email" aria-describedby="email" placeholder="Email">
        </div>
        
        <div class="form-group">
          <label for="password1" class="login">Mot de passe</label>
          <input type="password1" class="form-control" id="password1" placeholder="Password1"">
        </div>
        <div class="form-group">
          <label for="password2 " class="login">Confirmé Mot de passe</label>
          <input type="password2" class="form-control" id="password2" placeholder="Password2">
        </div>

        <div class="action-bottom clearfix">
          <input type="submit" class="btn btn-animation" id="vazyenvoi" value="Créer un Compte">
       
          <span class="action-login"><a href="login.php" class="button-login">Déjà un compte?</a></span>
          </div>
        </div> 
      </form>
    </div>
 
  </div>
<!------ MAIN FOOTER ----------->
<?php include("../constructor/footer.php"); ?>
    <?php include("../constructor/scriptbase.php");  ?>
</body>
</html>