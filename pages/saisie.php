<?php
  require('../inc/Function.php');
  $cueillette = getdu_the();
  $isaV=count($cueillette);
  $parcelle = getparcelle();
  $isap=count($parcelle);
?>
<div class="login-page">
   <center> 
    <p style = "color : white; font-size: 30px; font-family: Greating ; "> Cueillettes</p> 
    
   </center>   
  <div class="form"  style = "font-family : Russo One">
    <form class="login-form">
    <p>Date de cueillettes</p>
    <input type="date">

    <p> Choix de Cueilleur </p>
    <?php
      for ($i=0; $i < $isaV; $i++) { 
        ?>
        <option value="<?php echo $cueillette[$i]['id_cueillette_the'] ?>"><?php echo $cueillette[$i]['nom_variete_the'] ?></option>
        <?php
      }
    ?>

    <p> Choix de Parcelle </p>
  <select name="cueilleur" id="select">
    <option value ="the">the </option>
    <option value ="cafe">F </option>
  </select><br>
    <p>Poids</p>
    <input type="number"> 
 
  
      <button>Valider</button>
      </form>
  </div>
</div> 
