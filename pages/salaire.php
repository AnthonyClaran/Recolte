<?php
  require('../inc/Function.php');
  $salaire = getsalaire();
  $isa=count($salaire);
?>
<div class="login-page">

  <div class="form" style = "font-family : Russo One">
    <form class="login-form" action="traitement/Salaire.php" method="GET">
    <p style = "color : green ; font-size: 30px; font-family: Greating ; "> Configuration des Salaires</p>
    <p>Salaire</p>
      <input type="number" name="salaire"> 

    
      <button>Modifier</button>
      </form>
  </div>
</div>
<div>
  <Table class = "table" style = "background-color : white">
    <tr>
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
