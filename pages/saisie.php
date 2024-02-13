<?php
  require('../inc/Function.php');
  $cueillette = getcueilleurs();
  $isaV=count($cueillette);
  $parcelle = getparcelle();
  $isap=count($parcelle);
?>
<div class="login-page">   
  <div class="form"  style = "font-family : Russo One">
    <form class="login-form" id="form">
    <p style = "color : green; font-size: 30px; font-family: Greating ; "> Saisie</p> 
    <p>Date de debut de cueillettes</p>
    <input type="date" name="dateD">
    <p>Date de fin de cueillettes</p>
    <input type="date" name="dateF">

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
  <select name="Parcelle" id="select1">
    <?php
      for ($i=0; $i < $isap; $i++) { 
        ?>
        <option value="<?php echo $parcelle[$i]['id_parcelle'] ?>"><?php echo $parcelle[$i]['num_parcelle'] ?></option>
        <?php
      }
    ?>
  </select><br>
    <p>Poids</p>
    <input type="number" name="poid">
 
  
      <input type="submit" value="Valider">
      </form>
  </div>
</div> 
<!--<script src="../Assets/js/sasie.js">-->
<script>
  function sendData() {
    var xhr; 
    try {
        xhr = new XMLHttpRequest();
    } catch (e) {
        alert('XMLHttpRequest is not supported in this browser');
        return;
    }

    var formData = new FormData(form);

    xhr.addEventListener("load", function(event) {
        if (xhr.status >= 200 && xhr.status < 300) {
            var msg = JSON.parse(xhr.responseText);
            if (msg['success'] == "true") {
                alert("L'achat est un succès");
            } else {
                alert(msg['success']);
            }
        } else {
            alert('Request failed with status ' + xhr.status);
        }
    });

    xhr.addEventListener("error", function(event) {
        alert('Oups! Quelque chose s\'est mal passé.');
    });

    xhr.open("POST", "Voirsaisie.php");
    xhr.send(formData);
}

var form = document.getElementById("form");

form.addEventListener("submit", function (event) {
    event.preventDefault(); 
    sendData();
});
</script>