<?php
  require('../inc/Function.php');
  $saison = getdu_the();
  $isa=count($saison);
?>
<div class="login-page login-form">



<form class="login-form" action="traitement/Variete.php" method="GET">

<center>
  <div style = "font-size: 20px; font-family: ANTON ; background-color : white; height : 600px">
  <br>
  <p style = "color : green; font-size: 30px; font-family: Greating ; "> Saison de Regeneration</p>
  <input type="checkbox" name="mois" value="1"> Janvier<br>
  <input type="checkbox" name="mois" value="2"> Fevrier <br>
  <input type="checkbox" name="mois" value="3"> Mars<br>
  <input type="checkbox" name="mois" value="4"> Avril<br>
  <input type="checkbox" name="mois" value="5"> Mai<br>
  <input type="checkbox" name="mois" value="6">Juin<br>
  <input type="checkbox" name="mois" value="7"> Juillet<br>
  <input type="checkbox" name="mois" value="8"> Aout<br>
  <input type="checkbox" name="mois" value="9"> Septembre<br>
  <input type="checkbox" name="mois" value="10"> Octobre<br>
  <input type="checkbox" name="mois" value="11"> Novembre<br>
  <input type="checkbox" name="mois" value="12"> Decembre<br>
  <br>
  <br>
  <button> Sauvegarder</button>
</p>
</div>
</div>
</center>
</form>


<!--<script src="../Assets/js/Variete.js"></script>-->