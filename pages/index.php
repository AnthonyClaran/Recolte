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
<img src="../Assets/image/the.png" width="50" height="50"> <p style = "color : white; font-family : georgia; font-size : 20px; font-style: italic ; float = left">La Récolte </p> </img>
<div class="login-page">
   <center> 
    <p style = "color : white; font-size: 18px; font-family: ANTON; font-style: italic; "> Veuillez completez en tant qu'Admin</p> 
    
   </center>   
  <div class="form">
    <form class="template.php" action="traitment_index.php" methode="get">
      <input type="text" placeholder="Email" name="email"/>
      <input type="password" placeholder="password" name="mdp"/>
      <button>Login</button>
      </form>
  </div>
  <center> 
   <p style = "color : white; font-size: 18px; font-family: ANTON; font-style: italic; "> Passez en tant qu'Utilisateurs  <a href = "users.php">  cliquez ici </a></p> 
   </center> 
</div> 
</body>
</html>