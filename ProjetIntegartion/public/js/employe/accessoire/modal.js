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
var fermerModalButton = document.getElementById('fermerModal');
if (fermerModalButton) {
    fermerModalButton.addEventListener('click', fermerModal);
} else {
    console.log("L'élément 'fermerModal' n'a pas été trouvé dans le DOM");
}
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

//********************************************************************VÉRIFIER SI LA DATE DE FIN EST SUPÉRIEUR À LA DATE DE DÉBUT*************************** */
// eslint-disable-next-line no-unused-vars
function validateDates() {
    var dateDebut = document.getElementById('date_debut').value;
    var dateFin = document.getElementById('date_fin').value;
    var errorMessageDiv = document.getElementById('dateError');

    if (dateDebut && dateFin && dateFin < dateDebut) {
        errorMessageDiv.textContent = 'La date de fin ne peut pas être antérieure à la date de début.';
    } else {
        errorMessageDiv.textContent = ''; // Efface le message d'erreur si les dates sont valides
    }
}

//*******************************************************************FILTRER LES HISTORQIUES DE FORMULAIRES EMPLOYE*********************************************** */

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

    console.warn('je me rend ici') ;

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
                var date = new Date(formulaire.created_at);
                var formattedDate = date.toLocaleDateString('fr-FR') + '  ' + date.toLocaleTimeString('fr-FR');

                existingFormulaireDiv.className = 'historique-unite';
                existingFormulaireDiv.innerHTML = '<i class="fa-solid fa-folder left-fontAwesome"></i>' +
                    '<h5>' + formulaire.nomFormulaire.toUpperCase() + '</h5>' +
                    '<i class="fa-solid fa-check "style="color:green;"></i>' +
                    '<span>' + formattedDate + '</span>';
    
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

/********************************************************************************FILTRER LES FORMULAIRES DANS LA PAGE ÉQUIPE************************* */
   


// Fonction pour soumettre le formulaire et filtrer les formulaires
function filtrerFormulaireAccidentTravailEquipe(event) {
    event.preventDefault(); // Empêche la soumission standard du formulaire

    console.log('Avant lahxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx requête Fetc');
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
    console.log('toutes les données sont récupéres ');
  
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
        console.log('Ca marche data');
        var historiqueSection = document.querySelector('.historique-section2');
        historiqueSection.innerHTML = ""; // Vide la section
    
        if (data.length > 0) {
            console.log('Ca marche');
            data.forEach(function (formulaire) {
                var formulaireDiv = document.createElement('div');
                formulaireDiv.className = 'historique-unite2';
    
                var formattedDate = new Date(formulaire.created_at).toLocaleDateString('fr-FR') + ' ' + new Date(formulaire.created_at).toLocaleTimeString('fr-FR');
                var nomFormulaire = formulaire.nomFormulaire.toUpperCase();
                var nomEmploye = formulaire.nomEmploye.charAt(0).toUpperCase() + formulaire.nomEmploye.slice(1);
    
                formulaireDiv.innerHTML = `
                    <div class="unite1">
                        <i class="fa-solid fa-folder left-fontAwesome"></i>
                        <h5>${formattedDate}</h5>
                        ${formulaire.notifSup === 0 
                            ? '<i class="fa-solid fa-xmark" style="color:red;"></i>'
                            : '<i class="fa-solid fa-check" style="color:green;"></i>'
                        }
                    </div>
                    <h5>${nomFormulaire}</h5>
                    <h5>${nomEmploye}</h5>
                `;
    
                historiqueSection.appendChild(formulaireDiv);
            });
        } else {
            console.log('Ca marche');
            // Si aucun formulaire n'est retourné, affiche un message
            var messageDiv = document.createElement('div');
            messageDiv.className = 'historique-unite2';
            messageDiv.innerHTML = `
                <div class="historique-unite x2">
                    <i class="fa-solid fa-user-tie left-fontAwesome"></i>
                    <h5>AUCUN FORMULAIRE</h5>
                    <i class="fa-solid fa-xmark right-fontAwesome2"></i>
                    <span>Personne n'a rempli de formulaire</span>
                </div>
            `;
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


/********************************************************************************FILTRER LES FORMULAIRES ADMIN************************* */
   


// Fonction pour soumettre le formulaire et filtrer les formulaires
function filtrerFormulaireADmin(event) {
    event.preventDefault(); // Empêche la soumission standard du formulaire

    console.log('Avant lahxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx requête Fetc');
    // Récupère les valeurs du formulaire de filtrage
    var dateDebut = document.getElementById('date_debut').value;
    var dateFin = document.getElementById('date_fin').value;
    var typeFormulaire = document.getElementById('type').value;
    console.log(typeFormulaire);
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
    console.log('toutes les données sont récupéres ');
  
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
        var historiqueSection = document.querySelector('.menuProcedures');
        historiqueSection.innerHTML = document.querySelector('.uniteProcedureHeader').outerHTML; // Conserve le header

        if (data.length > 0) {
            data.forEach(function (formulaire) {
                var formattedDate = new Date(formulaire.created_at).toLocaleDateString('fr-FR');
                var nomFormulaire = formulaire.nomFormulaire.toUpperCase();
                var nomEmploye = formulaire.nomEmploye.charAt(0).toUpperCase() + formulaire.nomEmploye.slice(1);
                var typeCompte = '';
                if (Array.isArray(formulaire.usagers)) {
                    typeCompte = formulaire.usagers.map(usager => usager.typeCompte).join(', ');
                }
                var formulaireDiv = document.createElement('div');
                formulaireDiv.className = 'uniteProcedure';
                formulaireDiv.innerHTML = `
                    <span>${formattedDate}</span>
                    <span>${nomFormulaire}</span>
                    <span>${nomEmploye}</span>
                    <span>${typeCompte}</span>
                    <span style="color: ${formulaire.notifAdmin == 1 || formulaire.notifAdmin == 'oui' ? 'green' : 'red'};">
                        ${formulaire.notifAdmin == 1 || formulaire.notifAdmin == 'oui' 
                            ? '<i class="fa-solid fa-check"></i>' 
                            : '<i class="fas fa-spinner fa-spin fa-2x"></i>'
                        }
                    </span>
                `;
                historiqueSection.appendChild(formulaireDiv);
            });
        } else {
            historiqueSection.innerHTML = ''; // Vide la section si aucun formulaire n'est trouvé
            var messageDiv = document.createElement('div');
            messageDiv.className = 'uniteProcedure formulaireNonPrisEnCharge exclude-hover';
            messageDiv.innerHTML = '<span>AUCUN FORMULAIRE REMPLI POUR LE MOMENT</span>';
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
