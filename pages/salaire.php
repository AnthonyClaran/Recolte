<?php
  require('../inc/Function.php');
  $salaire = getsalaire();
  $isa=count($salaire);
?>
<div class="login-page">
   <center> 
    <p style = "color : white; font-size: 30px; font-family: Greating ; "> Configuration des Salaires</p> 
    
   </center>   

  <div class="form" style = "font-family : Russo One">
    <form class="login-form" action="traitement/Salaire.php" method="GET">
    <p>Salaire</p>
      <input type="number" name="salaire"> 

    
      <button>Modifier</button>
      </form>
  </div>
</div>
<div>
  <Table broder>
    <tr style = "background-color = White">
      <td>iD de cueilleurs</td>
      <td>montant</td>
    </tr>
    <?php
      for ($i=0; $i < $isa; $i++) { 
        ?>
          <tr>
            <td><?php echo $salaire[$i]['id_cueilleurs'] ?></td>
            <td><?php echo $salaire[$i]['montant'] ?></td>
          </tr>
        <?php
      }
    ?>
  </Table>
</div>
