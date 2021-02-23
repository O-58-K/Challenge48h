<?php   include("HeaderFooter/Header.php"); ?>


<h1>Administration</h1>

                            <!-- CREATION -->


<?php 

$pdo = new PDO("mysql:host=localhost;dbname=cvphp", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
//**********************************************************************************/

if (!empty($_POST)) {

    $_POST["titre"] = htmlentities($_POST["titre"], ENT_QUOTES);
    //**********************************************************************************/
        $_POST["SousTitre"] = htmlentities($_POST["SousTitre"], ENT_QUOTES);
    //**********************************************************************************/
    $_POST["description"] = htmlentities($_POST["description"], ENT_QUOTES);
    //**********************************************************************************/
        $_POST["DateEmbauche"] = htmlentities($_POST["DateEmbauche"], ENT_QUOTES);
    //**********************************************************************************/

    $requeteSQL = "INSERT INTO experience (Titre, SousTitre, description, DateEmbauche) VALUES ('$_POST[titre]', '$_POST[SousTitre]', '$_POST[description]', '$_POST[DateEmbauche]')"; 
    //création d'une colonne d'information dans la table 'experience' les différents paramètres sont Titre, SousTitre, description, DateEmbauche
    //**********************************************************************************/
    $result = $pdo->exec($requeteSQL); 
    //éxécution de la requete
    //**********************************************************************************/
}
?>

<div class="starter-template">  
    <form method="POST" action="" enctype='multipart/form-data'>

        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre">
        </div>

        <div class="form-group">
            <label for="SousTitre">Sous-Titre</label>
            <input type="text" class="form-control" id="SousTitre" name="SousTitre">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea rows="10" class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="DateEmbauche">Date d'embauche</label>
            <input type="text" class="form-control" id="DateEmbauche" name="DateEmbauche">
        </div>

        <button type="submit" class="btn btn-primary" id="OK">Enregistrer</button>

    </form>
</div>

<br><br>

<a href="index.php" class="btn btn-primary">Accueil</a>

<?php include("HeaderFooter/Footer.php"); ?>