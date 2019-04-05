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
      <h2>Se connecter</h2>
      <form action="">
        <input type="hidden" name='form_type' value="create_customer">
        <input type="hidden" name='utf8' value="Y">

        <div id="email" class="clearfix form-group">
          <label for="email" class="login">Email</label>
          <input type="text" class="form-control" id="email" aria-describedby="email" placeholder="Email">
        </div>

        <div class="form-group">
          <label for="password " class="login">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password"">
        </div>
        <div class="action-bottom clearfix">
          <input type="submit" class="btn btn-animation" id="vazyenvoi" value="Se connecter"">
       
          <span class="action-login"><a href="account.php" class="button-login">Pas encore enregistré?</a></span>
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