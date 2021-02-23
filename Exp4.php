<?php include("HeaderFooter/header.php");?>

<h1>Administration</h1>

                            <!-- MODIFICATION -->

<?php

include('sql4.php');

if (!empty($_POST)) {

            $Requete->bindValue(':id_Experience',$_POST['id_Experience'],PDO::PARAM_INT);
    $Requete->bindValue(':Titre',$_POST['Titre'],PDO::PARAM_STR);
            $Requete->bindValue(':SousTitre',$_POST['SousTitre'],PDO::PARAM_STR);
    $Requete->bindValue(':description',$_POST['description'],PDO::PARAM_STR);
            $Requete->bindValue(':DateEmbauche',$_POST['DateEmbauche'],PDO::PARAM_STR);
    $Requete->execute();
}
//***********************************|--INFORMATION--|*************************************/
// le code change la bonne colonne car il est prit en paramètre le fait que chaque colonne possède un id différent et que l'on précise l'id avant de modifier une colonne.
//*****************************************************************************************/

?>

<div class="starter-template">  
    <form method="POST" action="" enctype='multipart/form-data'>

        <div class="form-group">
            <label for="id_Experience">ID Colonne à modifier</label>
            <input type="text" class="form-control" id="id_Experience" name="id_Experience">
        </div>

        <div class="form-group">
            <label for="Titre">Titre</label>
            <input type="text" class="form-control" id="Titre" name="Titre">
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