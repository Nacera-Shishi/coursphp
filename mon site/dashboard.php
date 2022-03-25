<?php
   session_start();
   $nav = "Dashboard";
   $title = "Dashboard";
   require "functions/authentification.php";
   require "hearder.php";
  
?>
<h2><?php echo"Bienvenu(e) ".$_SESSION['Pseudo']." sur votre profil"?></h2>

<?php 
   if (!is_connected()) {
       header('Location: login.php');     
   
   }
   require "footer.php";

?>