// Fonction pour ouvrir le menu overlay
function openNavMenu() {
    var overlay = document.getElementById("ov_menu");
    overlay.classList.add("open");
    document.getElementById("zoneCliquable").style.display = "block";

}

// Fonction pour fermer le menu overlay
function closeNavMenu() {
    var overlay = document.getElementById("ov_menu");
    overlay.classList.remove("open");
    document.getElementById("zoneCliquable").style.display = "none";
}

// Gestion du clic sur la zone cliquable
document.getElementById('zoneCliquable').addEventListener('click', function(event) {
    // Vérifie si le clic était sur la zone cliquable (et non sur l'overlay lui-même)
    if (event.target === this) {
        closeNavMenu();
    }
});