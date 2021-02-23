<?php   include("HeaderFooter/Header.php"); ?>

<h1>Administration</h1>
                            <!-- SUPPRESSION -->

<?php

$pdo = new PDO("mysql:host=localhost;dbname=cvphp", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
//**********************************************************************************/

$result = $pdo->query("SELECT * FROM experience WHERE id_Experience ");
while ($experience = $result->fetch(PDO::FETCH_OBJ)) {}
//**********************************************************************************/
    
if (!empty($_POST)) {

    //**********************************************************************************/
    $result = $pdo->prepare('DELETE FROM experience WHERE id_Experience= ?'); 
    //nous supprimons la colonne séléctionnée à l'aide de son id
    //**********************************************************************************/
    $result->execute(array($_POST['Supprime'])); 
    // l'id sera donc contenu dans 'Supprime'
    //**********************************************************************************/
}
?>

    <div class="form-group">
        <form action="" method="post">
        <div class="form-group">
                <label for="Supprime">ID Colonne à supprimer</label> : <input type="text" name="Supprime" id="Supprime" class="form-control" /><br />
                <input type="submit" value="Supprimer" class="input-group-text" />
        </div>
        </form>
    </div>
<a href="index.php" class="btn btn-primary">Accueil</a>

<?php   include("HeaderFooter/Footer.php"); ?>
