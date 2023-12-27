
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


function toggleBackground(event) {
    var element = event.currentTarget;
    var isActive = element.classList.contains('active'); // Vérifie si la classe 'active' est présente

    if (isActive) {
        // Si actif, rendre transparent
        element.style.backgroundColor = 'transparent';
        element.style.border = 'transparent';
        element.classList.remove('active'); // Retire la classe 'active'
    } else {
        // Si inactif, appliquer la couleur
        element.style.backgroundColor = 'rgba(250, 250, 250, 0.3)'; // Mettez votre couleur de fond ici
        element.classList.add('active'); // Ajoute la classe 'active'
    }
}

document.querySelectorAll('.favorite_on_overlay_content').forEach(function(element) {
    element.classList.add('active'); // Ajoute 'active' au départ
    element.addEventListener('click', toggleBackground);
});