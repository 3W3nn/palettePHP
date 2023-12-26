
// Fonction pour ouvrir le menu overlay
function openNavFav() {
    var overlay = document.getElementById("ov_favorite");
    var zoneCliquable = document.getElementById("zoneCliquable");
    overlay.style.height = "73%";
    overlay.classList.add("active"); // Ajoute une classe lorsque l'overlay est ouvert
    zoneCliquable.style.display = "block"; // Affiche la zone cliquable
}


// Fonction pour fermer le menu overlay
function closeNavFav() {
    var overlay = document.getElementById("ov_favorite");
    var zoneCliquable = document.getElementById("zoneCliquable");
    overlay.style.height = "0";
    overlay.classList.remove("active"); // Supprime la classe lorsque l'overlay est fermé
    zoneCliquable.style.display = "none"; // Cache la zone cliquable
}

// Ajoute un écouteur d'événements pour fermer l'overlay lorsque l'on clique en dehors de celui-ci
window.addEventListener('click', function(event) {
    var zoneCliquable = document.getElementById('zoneCliquable');
    // Vérifie si le clic était sur l'overlay (mais pas sur son contenu)
    if (event.target === zoneCliquable) {
        closeNavFav();
    }
})

