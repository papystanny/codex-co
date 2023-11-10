// Fonction pour ouvrir le modal
function ouvrirModal() {
    document.getElementById("monModal").style.display = "block";
}

function ouvrirModalFiltre() {
    document.getElementById("monModal1").style.display = "block";
}

// Fonction pour fermer le modal
function fermerModal() {
    document.getElementById("monModal").style.display = "none";
}

function fermerModal1() {
    document.getElementById("monModal1").style.display = "none";
}

// Écouteur d'événement pour le bouton d'ouverture du modal
document.getElementById("ouvrirModalBtn").addEventListener("click", ouvrirModal);
document.getElementById("ouvrirModalFiltreBtn").addEventListener("click", ouvrirModalFiltre);

// Écouteur d'événement pour le bouton de fermeture du modal
document.getElementById("fermerModal").addEventListener("click", fermerModal);
document.getElementById("fermerModal1").addEventListener("click", fermerModal1);

// Écouteur d'événement pour fermer le modal en cliquant à l'extérieur de celui-ci
window.addEventListener("click", function(event) {
    if (event.target == document.getElementById("monModal")) {
        fermerModal();
    }
    else if (event.target == document.getElementById("monModal1")) {
        fermerModal1();
    }

});

// Écouteur d'événement pour soumettre le formulaire
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('formulaireFiltre').addEventListener('submit', function (event) {
            event.preventDefault();

            var dateDebut = document.getElementById('date_debut').value;
            var dateFin = document.getElementById('date_fin').value;
            var typeFormulaire = document.getElementById('type').value;

            // Effectue la requête AJAX vers le serveur avec les paramètres du filtre
            fetch('/chemin/vers/ta/route?dateDebut=' + dateDebut + '&dateFin=' + dateFin + '&typeFormulaire=' + typeFormulaire, {
                method: 'GET',
            })
            .then(response => response.json())
            .then(data => {
                // Met à jour la vue avec les nouveaux formulaires
                document.getElementById('historique-section').innerHTML = data;
            })
            .catch(error => console.error('Erreur lors de la requête Fetch', error));
    });
    fermerModal(); // Ferme le modal après la soumission du formulaire
});
