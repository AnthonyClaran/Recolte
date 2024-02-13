<?php
  $page=$_GET['page'];
  $page=$page . ".php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../Assets/image/icon.png">
    <link rel="stylesheet" href="../Assets/style.css">
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../Assets/js/jquery.min.js"></script>
    <script src="../Assets/js/bootstrap.min.js"></script>
    <title>Recolte</title>

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <ul class="nav navbar-nav navbar-left">
          <div style ="color = black">
          <li><img src="../Assets/image/icon.png" width=20px height=20px> </li> 
          <li><p style = "color : white; font-size: 15px; font-family: greating; float right "> Recolte</p></li>
          </div>
      </ul>
        <li><a href="client.php?page=saisie">Saisie</a></li>
        <li><a href="client.php?page=front-depense">Depenses</a></li>
        <li><a href="client.php?page=resultat">Resultat</a></li>
        <li><a href="client.php?page=liste">ListeDePaye</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
  include($page);
?>

<footer>.......</footer>

</body>
</html>
</body>
</html>