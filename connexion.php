<?php   include("HeaderFooter/Header.php"); ?>

<div id="container" class="starter-template">

            <form action="" method="POST">
                <h1>Connexion</h1>

                <div class="form-group">                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" name="UserName" class="form-control" id="UserName" required>
                </div>

                <div class="form-group">
                <label><b>Mot de passe</b></label>
                <input type="password" name="PassWord" id="PassWord" class="form-control" required>
                </div>

                <input type="submit" id='submit' value='Connexion' class="btn btn-primary">
                <br><br>
                <?php
                if (!empty($_POST)) {

                    if($_POST['UserName'] == "" and $_POST['PassWord'] == ""){
                        header('Location: index.php');
                    }
                }
                ?>
            </form>
        </div>

<?php   
                
include("HeaderFooter/Footer.php"); 

?>
