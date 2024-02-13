<?php
  require('../inc/Function.php');
  $cueillette = getcueilleurs();
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
    <p>Date de debut de cueillettes</p>
    <input type="dateD">
    <p>Date de fin de cueillettes</p>
    <input type="dateF">

    <p> Choix de Cueilleur </p>
  <select name="cueilleur" id="select">
    <?php
      for ($i=0; $i < $isaV; $i++) { 
        ?>
        <option value="<?php echo $cueillette[$i]['id_cueilleurs'] ?>"><?php echo $cueillette[$i]['nom_ceuilleurs'] ?></option>
        <?php
      }
    ?>
    </select><br>

    <p> Choix de Parcelle </p>
  <select name="Parcelle" id="select">
    <?php
      for ($i=0; $i < $isaV; $i++) { 
        ?>
        <option value="<?php echo $parcelle[$i]['id_parcelle'] ?>"><?php echo $parcelle[$i]['num_parcelle'] ?></option>
        <?php
      }
    ?>
  </select><br>
    <p>Poids</p>
    <input type="number" name="poid"> 
 
  
      <button>Valider</button>
      </form>
  </div>
</div> 
