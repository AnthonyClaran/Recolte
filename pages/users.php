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

<div class="login-page">
 
  <div class="form" >
    <form class="header.php" action="traitement_users.php" methode="get">
    <div style ="color = black">
          <img src="../Assets/image/icon.png" width=20px height=20px> 
          <p style = "color : black ; font-size: 15px; font-family: Lucida Handwriting; float right "> Recolte</p>
          </div>
    <p style ="color : black; font-size: 12px; font-family : Monaco; font-style: italic;" > Veuillez completez en tant qu'Utilisateurs</p> 
      <input type="text" placeholder="Email" name="email"/>
      <input type="password" placeholder="password" name="mdp"/>
      <button>Login</button>
      <br>
      <br><p style = "color : green ; font-size: 12px; font-style: italic;  "> Passez en tant qu'Admin <a href = "index.php"> cliquer ici </p> 
      </form>
  </div>

  <center> 
   <p style = "color : white; font-size: 18px; font-family: ANTON; font-style: italic; "> Passez en tant qu'Admin <a href = "index.php"> cliquer ici </p> 
   </center>
</div> 
</body>
</html>