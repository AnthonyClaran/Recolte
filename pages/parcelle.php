<?php
  require('../inc/Function.php');
  $variete = getdu_the();
  $isaV=count($variete);
  $parcelle = getdu_the();
  $isap=count($parcelle);
?>
<div class="login-page">
   <center> 
    <p style = "color : white; font-size: 30px; font-family: Greating ;  "> Gestion de Parcelle</p> 
    
   </center>   
  <div class="form"  style = "font-family : Russo One">
    <form class="login-form" action="traitement/Parcelle.php" method="GET" >
    <p>N de Parcelle</p>
      <input type="number" name="num"> 
    <p>Surface en Ha</p>
      <input type="number" name="surface"> 
    <p>Variete de the</p>
    <br><select name="variete" id="select">
    <?php
      for ($i=0; $i < $isaV; $i++) { 
        ?>
        <option value="<?php echo $variete[$i]['id_variete_the'] ?>"><?php echo $variete[$i]['nom_variete_the'] ?></option>
        <?php
      }
    ?>
    </select><br>
    <br>
      <button>Valider</button>
      </form>
  </div>
</div> 
<div>
  <Table>
    <tr>
      <td>N de Parcelle</td>
      <td>Surface en Ha</td>
      <td>Variete de the</td>
    </tr>
    <?php
      for ($i=0; $i < $isap; $i++) { 
        ?>
          <tr>
            <td><?php echo $parcelle[$i]['num_partielle'] ?></td>
            <td><?php echo $parcelle[$i]['surface_ha'] ?></td>
            <td><?php echo $parcelle[$i]['id_variete_the'] ?></td>
          </tr>
        <?php
      }
    ?>
  </Table>
</div>