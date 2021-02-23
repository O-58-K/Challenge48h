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
    
    $pdo = new PDO("mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_b9007de211fbd63", "b71e8fc4c36d15", "b2cc99c9", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    $articles = $pdo->query('SELECT * FROM ambiance ORDER BY id DESC ');

    if(isset($_GET['q']) AND !empty($_GET['q'])){
        $q = htmlspecialchars($_GET['q']);
        $articles = $pdo->query('SELECT * FROM ambiance WHERE Titre LIKE "%'.$q.'%" ORDER BY id DESC '); 
    }

?>

<body style="background: rebeccapurple; color: white;">
  

<?php
    
    $pdo = new PDO("mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_b9007de211fbd63", "b71e8fc4c36d15", "b2cc99c9", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    $articles = $pdo->query('SELECT * FROM ambiance ORDER BY id DESC ');

    if(isset($_GET['q']) AND !empty($_GET['q'])){
        $q = htmlspecialchars($_GET['q']);
        $articles = $pdo->query('SELECT * FROM ambiance WHERE Titre LIKE "%'.$q.'%" ORDER BY id DESC '); 
    }

    
?>

<ul>
<?php while($artc = $articles->fetch()){ ?>

        <br> 

        <section class="resume-section d-flex justify-content-center" id="">
            <div style="width: 50%!important;">
            
            <div class="grid_1_of_3 images_1_of_3">
						<div class="grid_1">
                        <img style="width: 100%; margin-top: 7%;" src="<?php echo $artc['url'] ?>" title="continue reading" alt="">
                            <div style="text-align: center; background: mediumpurple;" class="grid_desc">
                                <br>
                            <br>
                            <h3><?= $artc['Titre'] ?></h3>
                            <br><br>
                            <div class="cart-button">                         
                            <div class="clear"></div>
                            </div>
					        </div>
                        </div>
                <div class="clear"></div>
        </div>
        </section>

<?php } ?>
</ul>

<br><br><br><br><br><br>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<footer style="bottom: 0; position: fixed; width: 100%; background-color: mediumpurple !important" id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Equipe 52 &copy; PassionFroid</small>
    </div>
  </footer>