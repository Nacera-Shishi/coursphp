<?php 
$nav = "login";
$title= "Login";
$erreur= null;
require "hearder.php";
if (!empty($POST['Pseudo']) || !empty($_POST['password']) ) {
    if($_POST['Pseudo'] === "Cuicui" && $_POST['password'] === "12345"){
        session_start();
        $_SESSION['connected'] = 1;
        header('Location: dashboard.php');       
        $_SESSION['Pseudo']=$_POST['Pseudo'];
        exit();
    }else{
        $erreur = "Identifiants incorrects !";
    }
}
if ($erreur): ?>

<div class="alert alert-danger">  
   <?php echo $erreur; ?>
</div>

<?php 
endif; 
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