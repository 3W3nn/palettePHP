
    // Fonction pour ouvrir le menu overlay
    function openNav() {
    document.getElementById("ov_menu").style.width = "25%" // Ou la largeur que vous voulez
}

    // Fonction pour fermer le menu overlay
    function closeNav() {
    document.getElementById("ov_menu").style.width = "0%";
}

    // Ajoute un écouteur d'événements pour fermer l'overlay lorsque l'on clique en dehors de celui-ci
    window.addEventListener('click', function(event) {
    var overlay = document.getElementById("ov_menu");
    var zoneCliquable = document.getElementById('zoneCliquable');

    // Vérifie si le clic était sur l'overlay (mais pas sur son contenu)
    if (event.target === overlay) {
    closeNav();
}
    if (event.target === zoneCliquable) {
    closeNav();
}
});


