// Fonction pour ouvrir le modal
function ouvrirModal() {
    document.getElementById("monModal").style.display = "block";
}

// Fonction pour fermer le modal
function fermerModal() {
    document.getElementById("monModal").style.display = "none";
}

// Écouteur d'événement pour le bouton d'ouverture du modal
document.getElementById("ouvrirModalBtn").addEventListener("click", ouvrirModal);

// Écouteur d'événement pour le bouton de fermeture du modal
document.getElementById("fermerModal").addEventListener("click", fermerModal);

// Écouteur d'événement pour fermer le modal en cliquant à l'extérieur de celui-ci
window.addEventListener("click", function(event) {
    if (event.target == document.getElementById("monModal")) {
        fermerModal();
    }
});

// Écouteur d'événement pour soumettre le formulaire
document.getElementById("formulaireFiltre").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêche la soumission du formulaire
    // Récupérez les valeurs du formulaire et effectuez le traitement de la recherche ici
    // ...
    fermerModal(); // Ferme le modal après la soumission du formulaire
});
