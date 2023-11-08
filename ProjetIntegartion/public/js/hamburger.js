// Actions sur mobile 
var largeurEcran = window.innerWidth;  
if (largeurEcran < 768) {
    // Gerer l'apparition des messages de bienvenue et de déconnexion
        document.addEventListener("DOMContentLoaded", function () {
            // Sélectionnez l'élément du message par son ID
           // var messageLogout = document.getElementById("messageLogout");
            var messageWelcome = document.getElementById("messageWelcome");
            var messageNom= document.getElementById("messageNom");

            // Affichez le message
            //messageLogout.style.display = "none";
            messageWelcome.style.display = "block";
            messageNom.style.display = "none";

            // Temporisez pendant 3 secondes (3000 millisecondes) avant de masquer le message
            setTimeout(function () {
                messageWelcome.style.display = "none";
                //messageLogout.style.display = "none";
                messageNom.style.display = "block";
            }, 3000); 
        });

    // Gerer l'apparition de la navbar
        var prevScrollPos = window.pageYOffset; // Stocker la position de défilement précédente
        window.addEventListener("scroll", function() {
            var currentScrollPos = window.pageYOffset; // Obtenir la position de défilement actuelle
            var navbar = document.querySelector(".navbar");
            var prenav = document.querySelector(".prenav-in");

            if (prevScrollPos < currentScrollPos) {
                navbar.style.display = "none";
                prenav.style.display = "none";
            } else {
                navbar.style.display = "flex";
                prenav.style.display = "none";
            }

            prevScrollPos = currentScrollPos; // Mettre à jour la position de défilement précédente
        });

}
