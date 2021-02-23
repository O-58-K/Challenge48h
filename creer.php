<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav style="background-color: mediumpurple !important;" class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a style="color: white;font-family: monospace;font-size: xx-large;" class="navbar-brand" href="accueil.php">PassionFroid</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <form class="form-inline my-2 my-lg-0" method="GET" action="recherche.php" enctype='multipart/form-data'>
                <div class="input-group input-group-sm">
                    <input id="q" name="q" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Rechercher">
                    <div class="input-group-append">
                            <input type="submit" class="btn btn-outline-light button1" value="Valider" id="OK">
                    </div>
                </div>

                <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a style="color: white; margin-right: 0px;" class="nav-link" href="admin.php">Administration</a>
                        </li>
                    </ul>
                </div>

            </form>
        </div>
    </div>
</nav>

<?php
error_reporting(0); 
?> 
<?php
  $msg = ""; 
  
  if (isset($_POST['upload'])) { 
  
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "image/".$filename; 
          
    $db = mysqli_connect("localhost", "root", "", "photos"); 
  
        $sql = "INSERT INTO ambiance (url) VALUES ('$filename')"; 
  
        mysqli_query($db, $sql); 
          
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image téléchargé avec succès"; 
        }else{ 
            $msg = "Veuillez réessayer"; 
      } 
  } 
  $result = mysqli_query($db, "SELECT * FROM ambiance"); 
?> 

<center>

    <br><br>

    <form method="POST" action="" enctype="multipart/form-data"> 
        <h3>Vous pouvez ajouter des images dans votre dossier d'images</h3>
        <br>
        <input class="btn btn-outline-light" required id="url" type="file" name="uploadfile" value="" /> 
        <div>
            <br>
            <button class="btn btn-outline-light" type="submit"name="upload"> Télécharger </button>  
        </div> 
    </form>

    <body style="background: rebeccapurple; color: white;">

    <?php 

        $pdo = new PDO("mysql:host=localhost;dbname=challenge48h", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        if (!empty($_POST)) {

            $_POST["url"] = htmlentities($_POST["url"], ENT_QUOTES);
            $requeteSQL = "INSERT INTO ambiance (url, Titre) VALUES ('ambiance/$_POST[url]', '$_POST[Titre]')"; 
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