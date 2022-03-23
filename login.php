<?php 

$nav = "login";
$title= "Login";
$erreur= null;
if (!empty($POST['Pseudo']) || !empty($_POST['password']) ) {
    if($_POST['Pseudo'] === "Cuicui" && $_POST['password'] === "12345"){
        
    }else{
        $erreur = "Identifiants incorrects !";
    }
}
require "hearder.php";
if ($erreur) : ?>
<div class="alert alert-danger">
   <?php echo $erreur ?>
</div>
<?php endif;

?>
<form action="login.php" method = "POST">
    <label for="Votre Nom "><strong> Votre Nom :</strong></label><br>
    <input type="text" name="Pseudo" placeholder =" Entrer votre nom "> <br>
    <label for="Votre mot de passe"><strong>Votre mot de passe :</strong></label><br>
    <input type="password" name ="password" placeholder ="Entrer votre mot de passe"><br>
    <br>
    <button class= "btn" type="submit">Connexion</button>
</form>

<?php
require "footer.php";
?>