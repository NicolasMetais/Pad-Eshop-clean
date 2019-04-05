<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css" href="profile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
  <title>CLIENT PAGE</title>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg fixed-top">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Produits
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Hommes</a>
              <a class="dropdown-item" href="#">Femmes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Autres</a>
            </div>
          </li>
                    
          <li class="nav-item">
            <a class="nav-link " href="#" >Contactez-nous</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Blog
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
              <a class="dropdown-item" href="#">Evénements</a>
              <a class="dropdown-item" href="#">Chronique</a>
            </div>
          </li>
        </ul>
        <div class="row justify-content-center">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-sm btn-submit-navbar  my-2 my-lg-0" type="submit">Go!</button>
        </form>
      </div>
      <div class="col0">
        <ul class="navbar-nav ml-auto second-linkList">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-user"></i>
            </a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              
              <i class="fas fa-shopping-basket"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container">
    <!-------- MAIN Profile -------->
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
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>