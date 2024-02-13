<?php
  require('../inc/Function.php');
  $variete = getdu_the();
  $isa=count($saison);
?>
<div class="login-page">



<form class="login-form" action="traitement/Variete.php" method="GET">
<p style = "color : green; font-size: 30px; font-family: Greating ; "> Saison de Regeneration</p> 
<center>
  <div style = "font-size: 20px; font-family: ANTON ; background-color : white;">

  <input type="checkbox" name="mois" value="Janvier"> Janvier
  <input type="checkbox" name="mois" value="Fevrier"> Fevrier 
  <input type="checkbox" name="mois" value="Mars"> Mars
  <input type="checkbox" name="mois" value="Avril"> Avril
  <input type="checkbox" name="mois" value="Mai"> Mai
  <input type="checkbox" name="mois" value="Juin">Juin<br>
  <input type="checkbox" name="mois" value="Juillet"> Juillet
  <input type="checkbox" name="mois" value="Aout"> Aout
  <input type="checkbox" name="mois" value="Septembre"> Septembre
  <input type="checkbox" name="mois" value="Octobre"> Octobre
  <input type="checkbox" name="mois" value="Novembre"> Novembre
  <input type="checkbox" name="mois" value="Decembre"> Decembre
  <br>
  <br>
  <button> Sauvegarder</button>
</p>
</div>
</div>
</center>
</form>


<!--<script src="../Assets/js/Variete.js"></script>-->