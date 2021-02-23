<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

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


<?php
    
    $pdo = new PDO("mysql:host=localhost;dbname=challenge48h", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    $articles = $pdo->query('SELECT * FROM ambiance ORDER BY id DESC '); 

    if(isset($_GET['q']) AND !empty($_GET['q'])){
        $q = htmlspecialchars($_GET['q']);
        $articles = $pdo->query('SELECT * FROM ambiance WHERE Titre LIKE "%'.$q.'%" ORDER BY id DESC '); 
    }

?>

<body style="background: rebeccapurple; color: white;">
  

    <section class="resume-section d-flex justify-content-center" id="experience">
          <div class="w-100">

            <?php
              $pdo = new PDO("mysql:host=localhost;dbname=challenge48h", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

              //******************************************* */
              $result = $pdo->query("SELECT * FROM ambiance WHERE id = $_GET[id]");
              $ambiance = $result->fetch(PDO::FETCH_OBJ);
              //******************************************* */
            ?>   
              <div class="grid_1_of_3 images_1_of_3">
                      <div class="grid_1">
                        <img style="width: 100%; margin-top: 7%;" src="<?php echo $ambiance->Photo; ?>" title="continue reading" alt="">
                          <div style="text-align: center; background: mediumpurple;" class="grid_desc">
                            <br>
                              <h2 style="background: mediumpurple;" class="card-title"><?php echo $ambiance->Titre; ?></h2>
                              <br><h5 class="js-scroll-trigger" style="font-weight: bold;"> Description</h5>
                              <p><?php echo $ambiance->Description; ?></p>
                              <br>
                              <h2 class="reducedfrom"><?php echo $ambiance->Prix . "€"; ?></h2>
                              <br><br>
                              <center>
                                <div style="background: mediumpurple;" class="card">
                                <br>
                                <h5 style="background: mediumpurple;"><a style="width: 40%; margin-bottom: 10px;" href="panier?id=<?php echo $ambiance->id; ?>" class="btn btn-outline-light">Ajouter au panier</a></h5> 
                                </div>
                              </center>
                              <div class="cart-button">
                                
                                <div class="clear"></div>
                            </div>
                          </div>
                    </div>
                      <div class="clear"></div>
              </div>
                    

      </div>
    </section>

    <br><br><br><br><br><br>

                  <div class="grid_1_of_3 images_1_of_3">
                  <div class="grid_1">
                              <div style="text-align: center; background: mediumpurple;" class="grid_desc">
                                <br>
                                  <h1>Commentaires : </h1>
                                    <br>
                                  <h3 style="background: mediumpurple;" class="card-title"><?php echo $ambiance->commentaires; ?></h3>
                                  <div class="cart-button">                         
                                  <div class="clear"></div>
                                  <br><br>
                              </div>
                      </div>
                            </div>
                    <div class="clear"></div>
                  </div>

   
                  <br><br><br><br><br><br>

<footer style="bottom: 0; position: fixed; width: 100%; background-color: mediumpurple !important" id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Equipe 52 &copy; PassionFroid</small>
    </div>
  </footer>