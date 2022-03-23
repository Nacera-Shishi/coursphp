<?php
   
   $nav = "Dashboard";
   $title = "Dashboard";
   require "functions/authentification.php";
   require "hearder.php";
   
?>
<h2>Bienvenue sur votre profil</h2>

<?php 
   var_dump(is_connected());
   if (!is_connected()) {
       header('Location: login.php');
       
   }
   require "footer.php";
   $_SESSION['connected']=1;
?>