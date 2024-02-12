<?php
  require('../inc/Function.php');
  $taille = getdu_the();
  $isa=count($taille);
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
    <?php
      for ($i=0; $i < $isa; $i++) { 
        ?>
          <tr>
            <td><?php echo $taille[$i]['id_variete_the'] ?></td>
            <td><?php echo $taille[$i]['nom_variete_the'] ?></td>
            <td><?php echo $taille[$i]['occupation'] ?></td>
            <td><?php echo $taille[$i]['rendement'] ?></td>
          </tr>
        <?php
      }
    ?>
  </Table>
</div>

<!--<script src="../Assets/js/Variete.js"></script>-->