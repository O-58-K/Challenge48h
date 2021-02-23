<link rel="stylesheet" href="../css/style7.css">
<link rel="stylesheet" href="../css/app.css">
<link rel="stylesheet" href="../css/style8.css">
<link href="../vendor/scss/_card.scss" rel="stylesheet" />
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="../css/style4.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
<link href="../css/style.css" rel="stylesheet" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav style="background-color: mediumpurple !important;" class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a style="color: white;font-family: monospace;font-size: xx-large;" class="navbar-brand" href="{{url('/')}}">GamerPlanet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a style="color: white;" class="nav-link" href="{{url('/')}}">Accueil</a>
                </li>
                @if(auth()->check())
                  <li class="nav-item">
                      <a style="color: white;" class="nav-link" href="{{url('/signout')}}">Déconnexion</a>
                  </li>
                  <li class="nav-item">
                      <a style="color: white;" class="nav-link" href="{{url('/dashboard')}}">Profil</a>
                  </li>
                @else
                  <li class="nav-item active">
                      <a style="color: white;" class="nav-link" href="{{url('/inscription')}}">Inscription<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a style="color: white;" class="nav-link" href="{{url('/connexion')}}">Connexion</a>
                  </li>
                @endif
            </ul>

            <form class="form-inline my-2 my-lg-0" method="GET" action="{{url('/recherche')}}" enctype='multipart/form-data'>
                <div class="input-group input-group-sm">
                    <input id="q" name="q" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Rechercher">
                    <div class="input-group-append">
                            <input type="submit" class="btn btn-outline-light button1" value="Valider" id="OK">
                    </div>
                </div>
                <a class="btn btn-outline-light btn-sm ml-3" href="{{url('/paniervide')}}">
                    <i class="fa fa-shopping-cart"></i> Panier
                </a>

                <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a style="color: white; margin-right: 0px;" class="nav-link" href="{{url('/admin')}}">Administration</a>
                        </li>
                    </ul>
                </div>

            </form>
        </div>
    </div>
</nav>


<?php
    
    $pdo = new PDO("mysql:host=localhost;dbname=challenge48h", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    $articles = $pdo->query('SELECT * FROM annonces ORDER BY id DESC '); 

    if(isset($_GET['q']) AND !empty($_GET['q'])){
        $q = htmlspecialchars($_GET['q']);
        $articles = $pdo->query('SELECT * FROM annonces WHERE Titre LIKE "%'.$q.'%" ORDER BY id DESC '); 
    }

?>

<body style="background: rebeccapurple; color: white;">
  