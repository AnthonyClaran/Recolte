<?php
  require('../inc/Function.php');
  $depense = getcategorie();
  $isa=count($depense);
?>
<div class="login-page">
   
  <div class="form" style = "font-family : Russo One">
    <form class="login-form" action="traitement/Front-depense.php" method="GET" >
    <p style = "color : green; font-size: 30px; font-family: Greating ; "> Cueillettes</p> 
    <p>Date de depenses</p>
    <input type="date" name="date">

    <p> Categorie de depenses </p>
    <select name="categorie" id="select">
      <?php
        for ($i=0; $i < $isa; $i++) { 
          ?>
            <option value="<?php echo $depense[$i]['id_categorie'] ?>"><?php echo $depense[$i]['nom'] ?></option>
          <?php
        }
      ?>
    </select>
    <p>Montant</p>
    <input type="number" name="montant"> 
 
  
      <button>Valider</button>
      </form>
  </div>
 
</div> 
