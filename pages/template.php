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
<body style="background: url(../Assets/image/hehe.jpg) ; background-repeat : no-repeat; background-size : cover;">

<nav class="navbar navbar-inverse">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <ul class="nav navbar-nav navbar-left">
          <div style ="color = black">
          <li><img src="../Assets/image/icon.png" width=20px height=20px> </li> 
          <li><p style = "color : white; font-size: 15px; font-family: greating; float right "> Recolte</p></li>
          </div>
      </ul>
        <li><a href="template.php?page=variete">Variete</a></li>
        <li><a href="template.php?page=parcelle">Parcelles</a></li>
        <li><a href="template.php?page=cueilleur">Cueilleurs</a></li>
        <li><a href="template.php?page=depense">Depense</a></li>
        <li><a href="template.php?page=salaire">Salaire</a></li>
        <li><a href="template.php?page=saison">Saison</a></li>
      </ul>
    </div>
  </div>
</nav>

<center>

</center>

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