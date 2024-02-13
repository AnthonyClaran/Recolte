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
            var msg = event.target.responseText;
            if (msg === "success") {
                alert("L'achat est un succès");
            } else {
                alert("Erreur");
            }
        } else {
            alert('Request failed with status ' + xhr.status);
        }
    });

    xhr.addEventListener("error", function(event) {
        alert('Oups! Quelque chose s\'est mal passé.');
    });

    xhr.open("GET", "Voirsaise.php");
    xhr.send(formData);
}

var form = document.getElementById("form");

form.addEventListener("submit", function (event) {
    event.preventDefault(); 
    sendData();
});
