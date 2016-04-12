<?php
// ****************************************
// test d du token
// ****************************************


if(isset($_GET['id']) && isset($$_GET['token']))
    $id    = $_GET['id'];
    $token = $_GET['token'];
function get_token($id_utilisateur, $token)

$resultat = get_token($id, $token)
        if(!$resultat['email'])
        {
            $_SESSION['erreur']['login'] = "Votre email n'existe pas";
            $erreur =true;
        }

$stmt = $dbh->prepare("SELECT *  FROM tokens WHERE id_utilisateur= :id and token= :token and date_validite > now()");
$stmt->bindValue(':id',    $id,    PDO::PARAM_STR);
$stmt->bindValue(':token', $token, PDO::PARAM_STR);

$stmt->execute();
$token = $stmt->fetchall(PDO::FETCH_ASSOC);
if(!$token)
{

    $_SESSION['erreur']['login'] = "ce lien a expiré , veuillez reessayer de saisir un mot de passe !";
        header('Location: /index.php/login');
}
else
 {


?>

<?php ob_start() ?>
<?php $titre = "changement de mot de passe"; ?>
<div class="l-content">
    <div class="containerBouton pricing-tables pure-g">
        <div class="containerBloc pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-free">
                <form method="POST" class="pure-form pure-form-aligned"  action="/index.php/change_password_traitement">
                <div>
                    <legend>Accès membres.</legend>
                    <div class="pure-control-group">
                        <input type="email" name="email" placeholder="Email">
                    </div>

                    <div class="pure-control-group">
                        <input type="password" name="password" placeholder="Mot de passe">
                    </div>
                       <div class="pure-control-group">
                        <input type="password" name="passwordConfirm" placeholder="Confirmer votre mot de passe">
                    </div>
                   
                    <div class="pure-control-group">
                        <button type="submit" name ="valider" class="pure-button pure-button-primary buttonGo">Valider</button>
                    </div>

                 <?php
                // Apparition du message d'erreur en cas de pseudo déja utulisé
                    if(isset($_SESSION['erreur']['login']))
                    {
                        echo "<h4>". $_SESSION['erreur']['login']. "</h4>";
                        echo "<br>";
                        
                    }
                ?>  
                </form>
            </div>
        </div>

<?php $content = ob_get_clean() ?>
<?php include "layoutBase.php" ?>



