<?php
  require('../inc/Function.php');
  $saison = getdu_the();
  $isa=count($saison);
?>
<div class="login-page login-form">



<form class="login-form" action="traitement/Saison.php" method="GET">
<p style = "color : green; font-size: 30px; font-family: Greating ; "> Saison de Regeneration</p> 
<center>
  <div style = "font-size: 20px; font-family: ANTON ; background-color : white;">

  <input type="checkbox" name="Janvier" value="1"> Janvier<br>
  <input type="checkbox" name="Fevrier" value="2"> Fevrier <br>
  <input type="checkbox" name="Mars" value="3"> Mars<br>
  <input type="checkbox" name="Avril" value="4"> Avril<br>
  <input type="checkbox" name="Mai" value="5"> Mai<br>
  <input type="checkbox" name="Juin" value="6">Juin<br>
  <input type="checkbox" name="Juillet" value="7"> Juillet<br>
  <input type="checkbox" name="Aout" value="8"> Aout<br>
  <input type="checkbox" name="Septembre" value="9"> Septembre<br>
  <input type="checkbox" name="Octobre" value="10"> Octobre<br>
  <input type="checkbox" name="Novembre" value="11"> Novembre<br>
  <input type="checkbox" name="Decembre" value="12"> Decembre<br>
  <br>
  <br>
  <button> Sauvegarder</button>
</p>
</div>
</div>
</center>
</form>


<!--<script src="../Assets/js/Variete.js"></script>-->