<?php
  require('../inc/Function.php');
  $cueilleur = getcueilleurs();
  $isa=count($cueilleur);
?>
<div class="login-page">
  <div class="form"  style = "font-family : Russo One">
    <form class="login-form" action="traitement/Cueilleur.php" method="GET" >
    <p style = "color : green; font-size: 30px; font-family: Greating ; "> Gestion des Cueilleurs</p> 
    <p>Nom</p>
      <input type="text" name="nom"> 

    <p>Date de Naissance</p>
    <input type="date" name="dtn">


    <p>Genre</p>
    <br><select name="genre" id="select">
    <br><option value ="Homme">Homme </option>
    <option value ="Femme">Femme </option>
    </select><br>
    <br>
  
      <button>Valider</button>
      </form>
  </div>
</div>
<div>
  <Table class = "table" style = "background-color : white">
    <tr>
      <td>id de cueilleur de the</td>
      <td>nom de cueilleur de the</td>
      <td>occupation</td>
      <td>rendement</td>
    </tr>
    <?php
      for ($i=0; $i < $isa; $i++) { 
        ?>
          <tr>
            <td><?php echo $cueilleur[$i]['id_cueilleurs'] ?></td>
            <td><?php echo $cueilleur[$i]['nom_ceuilleurs'] ?></td>
            <td><?php echo $cueilleur[$i]['genre'] ?></td>
            <td><?php echo $cueilleur[$i]['DateNaissance'] ?></td>
          </tr>
        <?php
      }
    ?>
  </Table>
</div>
