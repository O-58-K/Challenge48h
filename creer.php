<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav style="background-color: mediumpurple !important;" class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a style="color: white;font-family: monospace;font-size: xx-large;" class="navbar-brand" href="">PassionFroid</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a style="color: white; margin-right: 0px;" class="nav-link" href="creer.php">Ajout</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: white; margin-right: 0px;" class="nav-link" href="modifier.php">Modification</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: white; margin-right: 0px;" class="nav-link" href="suppr.php">Suppression</a>
                        </li>
                    </ul>
                </div>

            <form class="form-inline my-2 my-lg-0" method="GET" action="recherche.php" enctype='multipart/form-data'>
                <div class="input-group input-group-sm">
                    <input id="q" name="q" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Rechercher">
                    <div class="input-group-append">
                            <input type="submit" class="btn btn-outline-light button1" value="Valider" id="OK">
                    </div>
                </div>

            </form>
        </div>
    </div>
</nav>

<center>

    <br><br>

    <body style="background: rebeccapurple; color: white;">

    <?php 

        $pdo = new PDO("mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_b9007de211fbd63", "b71e8fc4c36d15", "b2cc99c9", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        if (!empty($_POST)) {

            $_POST["url"] = htmlentities($_POST["url"], ENT_QUOTES);
            $_POST["tag"] = htmlentities($_POST["tag"], ENT_QUOTES);
            $requeteSQL = "INSERT INTO ambiance (url, Titre, tag) VALUES ('ambiance/$_POST[url]', '$_POST[Titre]', '$_POST[tag]')"; 
            $result = $pdo->exec($requeteSQL); 
        }

    ?>

    <br><br>

    <div class="starter-template">  
        <form method="POST" action="" enctype='multipart/form-data'>

            <div class="form-group">
                <h3>Image</h3>
                <br>
                <input style="width:20%;" type="text" class="form-control" placeholder="Nom de l'image" id="Titre" name="Titre" >
                <br>
                <input style="width:20%;" required type="text" class="form-control" placeholder="Nom du fichier de l'image" id="url" name="url">
                <br>
                <input style="width:20%;" required type="text" class="form-control" placeholder="Tag" id="tag" name="tag">
            </div>

            <button type="submit" class="btn btn-outline-light" id="OK">Enregistrer</button>

        </form>
    </div>

</center>

<footer style="bottom: 0; position: fixed; width: 100%; background-color: mediumpurple !important" id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Equipe 52 &copy; PassionFroid</small>
    </div>
  </footer>