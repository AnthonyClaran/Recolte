<?php
  require('../inc/Function.php');
  $depense = getcategorie();
  $isa=count($depense);
?>
<div class="login-page">
   <center> 
    <p style = "color : white; font-size: 30px; font-family: Greating ;  "> Gestion des Categories des depenses</p> 
    
   </center>   
  <div class="form" style = "font-family : Russo One">
    <form class="login-form" action="traitement/Depense.php" method="GET" >
    <p>Categories</p>
      <input type="text" name="nom"> 
  
      <button>Valider</button>
      </form>
  </div>
</div> 
<div>
  <Table>
    <tr>
      <td>id de cueilleurs</td>
      <td>montant</td>
    </tr>
    <?php
      for ($i=0; $i < $isa; $i++) { 
        ?>
          <tr>
            <td><?php echo $depense[$i]['id_categorie'] ?></td>
            <td><?php echo $depense[$i]['nom'] ?></td>
          </tr>
        <?php
      }
    ?>
  </Table>
</div>