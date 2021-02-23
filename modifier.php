<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav style="background-color: mediumpurple !important;" class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a style="color: white;font-family: monospace;font-size: xx-large;" class="navbar-brand" href="index.php">PassionFroid</a>
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

            </form>
        </div>
    </div>
</nav>



<center>

    <br><br>

    <body style="background: rebeccapurple; color: white;">

    <?php 

        $pdo = new PDO("mysql:host=localhost;dbname=challenge48h", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        //**********************************************************************************/

        $result = $pdo->query("SELECT * FROM ambiance WHERE id ");
        while ($ambiance = $result->fetch(PDO::FETCH_OBJ)) {}
        //**********************************************************************************/

        $Requete = $pdo->prepare('UPDATE ambiance SET Titre=:Titre,  url="ambiance/":url WHERE id=:id');

        if (!empty($_POST)) {

            $Requete->bindValue(':id',$_POST['id'],PDO::PARAM_INT);
            $Requete->bindValue(':Titre',$_POST['Titre'],PDO::PARAM_STR);
            $Requete->bindValue(':url',$_POST['url'],PDO::PARAM_STR);
            $Requete->execute();
}

    ?>

    <br><br>

    <div class="starter-template">  
        <form method="POST" action="" enctype='multipart/form-data'>

            <div class="form-group">
                <h3>Image</h3>
                <br>
                <input style="width:20%;" type="text" class="form-control" placeholder="id" id="id" name="id" >
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