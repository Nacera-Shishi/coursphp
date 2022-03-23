<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php
           if(isset($title)):
            echo $title;
            else:
            echo "Mon site";
            endif
    ?> </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" src="https://me.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=ncmloHI8SAnVKbcBpYEWXAssAniz-QtYRQuFzqx7Cq4JooXVRbTHaz5MUUrvGXpzxrYENZRKbDNJ6v6WlmYyMMfshn87n9Tivcy1YXF7QxU" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://me.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9nZXRib290c3RyYXAuY29tL2RvY3MvNC4xL2V4YW1wbGVzL3N0YXJ0ZXItdGVtcGxhdGUv"/>
    
</head>
<body>


<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="index.php">Mon Site</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if ($nav === "index"): ?> active <?php endif ?>">
            <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item <?php if ($nav === "Contact"): ?> active <?php endif ?>">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          
          <li class="nav-item <?php if ($nav === "A propos"): ?> active <?php endif ?>">
            <a class="nav-link" href="A propos.php">A propos</a>
          </li>
          <li class="nav-item <?php if ($nav === "Jeu du Hasard"): ?> active <?php endif ?>">
            <a class="nav-link" href="jeux_du_hasard.php">Jeu du Hasard</a>
          </li>
          <li class="nav-item <?php if ($nav === "login"): ?> active <?php endif ?>">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item <?php if ($nav === "Dashboard"): ?> active <?php endif ?>">
            <a class="nav-link" href="dashboard.php">Dashboard</a>
          </li>
        </ul>
      </div>
    </nav>



</body>
</html>