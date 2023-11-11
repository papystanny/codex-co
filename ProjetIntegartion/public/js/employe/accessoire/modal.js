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
function filtrerFormulaireAccidentTravail() {
    // Récupère les valeurs du formulaire de filtrage
    var dateDebut = document.getElementById('date_debut').value;
    var dateFin = document.getElementById('date_fin').value;
    var typeFormulaire = document.getElementById('type').value;
    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;


    // Effectue la requête AJAX pour filtrer les formulaires
    $.ajax({
        type: 'POST',
        url: '/filtrer-formulaires',
        data: {
            _token: csrfToken,
            date_debut: dateDebut,
            date_fin: dateFin,
            typeFormulaire: typeFormulaire,
        },
        success: function(data) {
            // Met à jour la vue avec les nouveaux formulaires
            // (Cette étape dépend de la structure de ta vue et de la façon dont tu veux afficher les données)
            var historiqueSection = document.getElementById('historique-section');
            historiqueSection.innerHTML = ""; // Vide la section avant d'ajouter de nouveaux éléments

            // Traite chaque formulaire
                if (data.length > 0) {
                    data.forEach(function(formulaire) {
                        var formulaireDiv = document.createElement('div');
                        formulaireDiv.innerHTML = '<i class="fa-solid fa-folder left-fontAwesome"></i>' +
                                                '<h5>' + formulaire.fonctionMomentEvenement + '</h5>' +
                                                '<i class="fa-solid fa-check right-fontAwesome"></i>' +
                                                '<span>' + formulaire.dateAcccident + '</span>';

                        historiqueSection.appendChild(formulaireDiv);
                    });
                } else {
                    // Si aucun formulaire n'est retourné, affiche un message
                    var messageDiv = document.createElement('div');
                    messageDiv.innerHTML = '<i class="fa-regular fa-folder left-fontAwesome"></i>' +
                                        '<h5>AUCUN FORMULAIRE</h5>' +
                                        '<i class="fa-solid fa-xmark right-fontAwesome2"></i>' +
                                        '<span>Veuillez remplir un formulaire</span>';

                    historiqueSection.appendChild(messageDiv);
                }
        },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Status: ' + textStatus);
                console.error('Error: ' + errorThrown);
                console.error(jqXHR.responseText);
        }
    });

    fermerModal(); // Ferme le modal après la soumission du formulaire

    // Empêche le formulaire de se soumettre normalement
    return false;
}


   
