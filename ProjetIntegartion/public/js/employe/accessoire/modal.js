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



// Fonction pour soumettre le formulaire et filtrer les formulaires
function filtrerFormulaireAccidentTravail(event) {
    event.preventDefault(); // Empêche la soumission standard du formulaire


    // Récupère les valeurs du formulaire de filtrage
    var dateDebut = document.getElementById('date_debut').value;
    var dateFin = document.getElementById('date_fin').value;
    var typeFormulaire = document.getElementById('type').value;
    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

    console.log('Avant la requête Fetch');

    // Prépare les données à envoyer
    var data = {
        _token: csrfToken,
        date_debut: dateDebut,
        date_fin: dateFin,
        typeFormulaire: typeFormulaire,
    };

    // Effectue la requête Fetch pour filtrer les formulaires
    fetch('/filtrer-formulaires', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify(data)
        
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }
        return response.json();
    })
    .then(data => {
        console.log('Success:', data);
        var historiqueSection = document.getElementById('historique-section');
        historiqueSection.innerHTML = ""; // Vide la section avant d'ajouter de nouveaux éléments
    
        // Utilise un fragment de document pour stocker temporairement les éléments créés
        var fragment = document.createDocumentFragment();
        if (data.length > 0) {
            data.forEach(function (formulaire) {
                  // Met à jour la vue avec les nouveaux formulaires
          
                var existingFormulaireDiv = document.createElement('div');
                existingFormulaireDiv.className = 'historique-unite';
                existingFormulaireDiv.innerHTML = '<i class="fa-solid fa-folder left-fontAwesome"></i>' +
                    '<h5>' + formulaire.fonctionMomentEvenement + '</h5>' +
                    '<i class="fa-solid fa-check right-fontAwesome"></i>' +
                    '<span>' + formulaire.dateAcccident + '</span>';
    
                // Ajoute l'élément créé au fragment
                fragment.appendChild(existingFormulaireDiv);
            });
    
            // Ajoute tous les éléments du fragment à historiqueSection
            historiqueSection.appendChild(fragment);
        } else {
            // Si aucun formulaire n'est retourné, affiche un message
            var messageDiv = document.createElement('div');
            messageDiv.className = 'historique-unite';
            messageDiv.innerHTML = '<i class="fa-regular fa-folder left-fontAwesome"></i>' +
                '<h5>AUCUN FORMULAIRE</h5>' +
                '<i class="fa-solid fa-xmark right-fontAwesome2"></i>' +
                '<span>Pas de formulaire trouvée</span>';
    
            historiqueSection.appendChild(messageDiv);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    })
    .finally(() => {
        console.log('Fetch request completed');
        fermerModal(); // Ferme le modal après la soumission du formulaire
    });

    console.log('Après la requête Fetch');
}

   


// Fonction pour soumettre le formulaire et filtrer les formulaires
function filtrerFormulaireAccidentTravailEquipe(event) {
    event.preventDefault(); // Empêche la soumission standard du formulaire


    // Récupère les valeurs du formulaire de filtrage
    var dateDebut = document.getElementById('date_debut').value;
    var dateFin = document.getElementById('date_fin').value;
    var typeFormulaire = document.getElementById('type').value;
    var nomEmploye = document.getElementById('nomEmploye').value;
    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

    console.log('Avant la requête Fetch');

    // Prépare les données à envoyer
    var data = {
        _token: csrfToken,
        date_debut: dateDebut,
        date_fin: dateFin,
        nom_employe: nomEmploye,
        typeFormulaire: typeFormulaire,
    };

    // Effectue la requête Fetch pour filtrer les formulaires
    fetch('/filtrer-formulairesEquipes', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify(data)
        
    })
    .then(response => {
       
        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }
        return response.json();
    })
    .then(data => {

      
        var historiqueSection = document.getElementById('historique-section2');
        
        historiqueSection.innerHTML = ""; // Vide la section avant d'ajouter de nouveaux éléments

        console.log('Erreur:');
        // Utilise un fragment de document pour stocker temporairement les éléments créés
        var fragment = document.createDocumentFragment();
        if (data.length > 0) {
            data.forEach(function (formulaire) {
                  // Met à jour la vue avec les nouveaux formulaires
          
                var existingFormulaireDiv = document.createElement('div');
                existingFormulaireDiv.className = 'historique-unite2';
                existingFormulaireDiv.innerHTML = `
                <div class="unite1">
                    <i class="fa-solid fa-folder left-fontAwesome"></i>
                    <h5>${formulaire.dateAcccident}</h5>
                    <i class="fa-solid fa-xmark right-fontAwesome2"></i>
                </div>
                <h5>${formulaire.fonctionMomentEvenement.toUpperCase()}</h5>
                <h5>${formulaire.nomEmploye}</h5>
            `;
    
                // Ajoute l'élément créé au fragment
                fragment.appendChild(existingFormulaireDiv);
            });
    
            // Ajoute tous les éléments du fragment à historiqueSection
            historiqueSection.appendChild(fragment);
        } else {
            // Si aucun formulaire n'est retourné, affiche un message
          
        }
    })
    .catch(error => {
        console.error('Error:', error);
    })
    .finally(() => {
        console.log('Fetch request completed');
        fermerModal(); // Ferme le modal après la soumission du formulaire
    });

    console.log('Après la requête Fetch');
}
