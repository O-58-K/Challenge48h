
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

<?php
    
    $pdo = new PDO("mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_b9007de211fbd63", "b71e8fc4c36d15", "b2cc99c9", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    $articles = $pdo->query('SELECT * FROM ambiance ORDER BY id DESC '); 
        

    if(isset($_GET['q']) AND !empty($_GET['q'])){
        $q = htmlspecialchars($_GET['q']);
        $articles = $pdo->query('SELECT * FROM ambiance WHERE Titre LIKE "%'.$q.'%" ORDER BY id DESC '); 
    }

?>

<body style="background: rebeccapurple; color: white;">

<center>
  
  <br>
    <h1>Ajoutez des photos</h1>
    <h5>Faites des recherches avec le formulaire </h5>
  <br>

  <button onclick="download()" style="width: 20%;" class="btn btn-outline-light">Télécharger</button>

  <br><br><br>

</center>

<section class="resume-section d-flex justify-content-center" id="">
        <div style="width: 50%!important;">
        <?php
          $pdo = new PDO("mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_b9007de211fbd63", "b71e8fc4c36d15", "b2cc99c9", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

          $result = $pdo->query("SELECT * FROM ambiance WHERE id "); 
              while ($ambiance = $result->fetch(PDO::FETCH_OBJ)) { ?>
           
           <div class="grid_1_of_3 images_1_of_3">
						<div class="grid_1">
						    <img style="width: 100%; margin-top: 7%;" src="<?php echo $ambiance->url; ?>" title="continue reading" alt="">
                            <div style="text-align: center; background: mediumpurple;" class="grid_desc">
                                <br>
                            <h2 style="background: mediumpurple;" class="card-title"><?php echo $ambiance->Titre; ?></h2>
                            <center>
                                <br>
                            </center>
                            <div class="cart-button">                         
                            <div class="clear"></div>
                            </div>
					        </div>
                        </div>
                <div class="clear"></div>
          </div>

              <?php } ?>

    </div>
  </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"> 
   </script> 
   <script>  
      function download(){ 
          axios({ 
              url:'https://source.unsplash.com/random/500x500', 
              method:'GET', 
              responseType: 'blob' 
      }) 
      .then((response) => { 
             const url = window.URL 
             .createObjectURL(new Blob([response.data])); 
                    const link = document.createElement('a'); 
                    link.href = url; 
                    link.setAttribute('download', 'image.jpg'); 
                    document.body.appendChild(link); 
                    link.click(); 
      }) 
      } 
        
   </script> 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  <br><br><br><br><br><br>

  <footer style="bottom: 0; position: fixed; width: 100%; background-color: mediumpurple !important" id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Equipe 52  &copy; PassionFroid</small>
    </div>
  </footer>