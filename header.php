<!DOCTYPE html>
  <html lang="fr">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width+initial-scale=1.0"/>
      <meta name="description" content="Site Baptiste">
      <meta name="keywords" content="css3, html5, js, background video, fullscreen video">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"/>
      <link href="css/style.css" rel="stylesheet" type="text/css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
      <title>Site de Baptiste</title>
    </head>

<body class="bg-dark">

<nav class="navbar navbar-expand-lg navbar-dark sticky-top row" style="background-color: black;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse col-4" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item text-center">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-plus" style="color: white;"></i></a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="formulaire.php">FORMULAIRE AJOUT PROD</a></li>
            <li><a class="dropdown-item" href="index.php">CATALOGUE</a></li>
            <li><a class="dropdown-item" href="#">NOUS CONTACTER</a></li>
            <li><hr class="dropdown-divider"/></li>
            <li><a class="dropdown-item" href="panier.php"><i class="fas fa-shopping-bag" style="color: black;"></i> TON PANIER FREROT</a></li>
          </ul>
        </li>
      </ul>

      <div class="text-center col-4">
          <a class="navbar-brand" href="https://www.youtube.com/watch?v=lUJpxal2Qt8"><i class="fas fa-dice-d20" style="font-size: 35px;"></i></i></a>
      </div>

      <div class="col-4">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
    </div>
  </div>
</nav>
