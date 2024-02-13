<?php
  require('../inc/Function.php');
  $histo = gethisto_ceuillette();
  $isa=count($histo);
?>

<div class="login-page">
>   
  <div class="form" style = "font-family : Russo One">
    <form class="login-form">
    <p style = "color : Green; font-size: 30px; font-family: Greating ; "> Liste de paiement</p>

    <p>Debut de paiement</p>
    <input type="date">

    <p>Fin de paiement</p>
    <input type="date">

    <p>Nom du cueilleur</p>
    <input type="text" name="nom"> 

    <p>Poids en kilo</p>
    <input type="number">
    
    <p>%Bonus</p>
    <input type="number">

    <p>%Mallus</p>
    <input type="number">

    <p>Montant</p>
    <input type="number">
 
  
      <button>Valider</button>
      </form>
  </div>
 
</div> 

<br>
  <center>
  <Table class = "table" style = "background-color : white">
    <tr >
      <td style = "color = red ">Date debut</td>
      <td>Date fin</td>
      <td>nom</td>
      <td>poids ceuiller</td>
    </tr>
    <?php
      for ($i=0; $i < $isa; $i++) { 
        
  $ceuiller=getcueilleursbyid($histo[$i]['id_cueilleurs']);
        ?>
          <tr>
            <td><?php echo $histo[$i]['date_debut'] ?></td>
            <td><?php echo $histo[$i]['date_fin'] ?></td>
            <td><?php echo $ceuiller['nom_ceuilleurs'] ?></td>
            <td><?php echo $histo[$i]['poids_ceuillet'] ?></td>
          </tr>
        <?php
      }
    ?>
  </Table>

    </center>
  <br>
</div>
