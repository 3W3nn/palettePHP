
    // Fonction pour ouvrir le menu overlay
    function openNavMenu() {
        var overlay = document.getElementById("ov_menu");
        var zoneCliquable = document.getElementById("zoneCliquable");
        overlay.style.width = "25%";
        overlay.classList.add("active"); // Ajoute une classe lorsque l'overlay est ouvert
        zoneCliquable.style.display = "block"; // Affiche la zone cliquable
    }


    // Fonction pour fermer le menu overlay
    function closeNavMenu() {
        var overlay = document.getElementById("ov_menu");
        var zoneCliquable = document.getElementById("zoneCliquable");
        overlay.style.width = "0";
        overlay.classList.remove("active"); // Supprime la classe lorsque l'overlay est fermé
        zoneCliquable.style.display = "none"; // Cache la zone cliquable
    }

    // Ajoute un écouteur d'événements pour fermer l'overlay lorsque l'on clique en dehors de celui-ci
    window.addEventListener('click', function(event) {
    //var overlay = document.getElementById("ov_menu");
    var zoneCliquable = document.getElementById('zoneCliquable');
    var overlay_content = document.querySelector('.menu_overlay_content');
    //var menu  = document.getElementById('zoneCliquable');
    // Vérifie si le clic était sur l'overlay (mais pas sur son contenu)
        if (event.target === zoneCliquable) {
            closeNavMenu();
        }

});


