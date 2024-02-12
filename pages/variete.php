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
  <Table>
    <tr>
      <td>id de variete de the</td>
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
</div>

<!--<script src="../Assets/js/Variete.js"></script>-->