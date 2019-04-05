<!DOCTYPE html>
<html>
 <?php include("template/headIndex.php"); ?>
    <body>
    <?php include("template/menu.php"); ?>

<div class= "body-home">

        <div class="carousel">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images/beach" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Images/cat" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Images/woman" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!----------  BESTSELLERS ------------>
    <div class="row bestSellers">
      <div class="card col-md-6">
      <!-- PHP CODE DATABASE PRODUCTS -->
        <img src="Images/cat" class="displayImg card-img-top" alt="...">
        <div class="card-body bestProduct">
          <a href="javascript:alert('You clicked the text')" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card col-md-6">
        <img src="Images/cat" class="displayImg card-img-top" alt="...">
        <div class="card-body bestProduct">
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <!---------- 4 PRODUCTS ------------->
    <div id="links-details-home" class="row">

      <div class="card col">
        <img src="Images/cat" class="card-img-top" alt="...">
        <div href="#" class="card-body">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
      <div class="card col">
        <img src="Images/cat" class="card-img-top" alt="...">
        <div href="#" class="card-body">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
      <div class="card col">
        <img src="Images/cat" class="card-img-top" alt="...">
        <div href="#" class="card-body">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
      <div class="card col">
        <img src="Images/cat" class="card-img-top" alt="...">
        <div href="#" class="card-body">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <!-- afficher 4 liens linéaire -->  

    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <img src="Images/cat" class="card-img-top" alt="...">
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h3>Notre philosophie:</h3> 
            <p>Hac ita persuasione reducti intra moenia bellatores obseratis undique portarum aditibus, propugnaculis insistebant et pinnis, congesta undique saxa telaque habentes in promptu, ut si quis se proripuisset interius, multitudine missilium sterneretur et lapidum.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
</div>

    <?php include("template/footer.php"); ?>
    <?php include("template/scriptbase.php");  ?>
    </body>

</div>

</html>