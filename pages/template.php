<?php
  $page=$_GET['page'];
  $page=$page . ".php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../Assets/image/logo.png">
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
        <li><a href="variete.php">Variete</a></li>
        <li><a href="parcelle.php">Parcelles</a></li>
        <li><a href="cueilleur.php">Cueilleurs</a></li>
        <li><a href="depense.php">Depense</a></li>
        <li><a href="salaire.php">Salaire</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
  include($page);
?>

<footer>
<div class="text-center p-4" style="background-color: black">
<p style = "color : white; float : right;">  ETU2866     Fanasina </p>
  <p style = "color : white; float : left; " >  ETU2820     Anthony </p>
  <p style = "color : white ; float : center;">  ETU2837     Fenoantra </p>

  </div>
</footer>

</body>
</html>
</body>
</html>