<?php
  require('../inc/Function.php');
  $variete = getdu_the();
  $isa=count($variete);
?>
<div class="login-page">
   <center> 
    <p style = "color : white; font-size: 30px; font-family: Greating ; "> Gestion de Variété de Thé</p> 
    
   </center>   

  <div class="form" style = "font-family : Russo One">
    <form class="login-form" action="traitement/Variete.php" method="GET">
    <p>Nom du The </p>
      <input type="text" name="nom"> 
    <p>m/pieds</p>
      <input type="number" name="occupation"> 
    <p>Kg/Mois</p>
      <input type="number" name="rendement"> 

      <button> Valider</button>
      </form>
  </div>
</div>
<div>
<form class="login-form" action="traitement/Variete.php" method="GET">
<center>
  <div style = "margin: 30px; background-color: #ffffff; border: 1px solid black; opacity: 0.6">
  <p style = "color : white; font-size: 20px; font-family: georgia ; "> Saison de Regeneration </p>
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
<br>
  <center>
  <Table class = "table" style = "background-color : white">
    <tr >
      <td style = "color = red ">id de variete de the</td>
      <td>nom de variete de the</td>
      <td>occupation</td>
      <td>rendement</td>
    </tr>
    <?php
      for ($i=0; $i < $isa; $i++) { 
        ?>
          <tr>
            <td><?php echo $variete[$i]['id_variete_the'] ?></td>
            <td><?php echo $variete[$i]['nom_variete_the'] ?></td>
            <td><?php echo $variete[$i]['occupation'] ?></td>
            <td><?php echo $variete[$i]['rendement'] ?></td>
          </tr>
        <?php
      }
    ?>
  </Table>

    </center>
  <br>
</div>

<!--<script src="../Assets/js/Variete.js"></script>-->