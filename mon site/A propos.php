

<?php 
  session_start();
  $nav = "A propos";
  session_unset();
  require "hearder.php";
   ?>

<h1>A propos de nous </h1>
<h4> Qui sommes Nous ?</h4>
<p> Nous sommes un organisme de solidarit√©</p>

<?php 
    
    require "footer.php";
    
    ?>
    