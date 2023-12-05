/*Écouteurs d'événements pour les champs de formulaire
const textNom = document.getElementById('textNom');
const textNomError = document.getElementById('textNomError');

textNom.addEventListener('blur', () => {
    validateTextNom();
});

const textLien = document.getElementById('textLien');
const textLienError = document.getElementById('textLienError');

textLien.addEventListener('blur', () => {
    validateTextLien();
});



// eslint-disable-next-line no-undef
typeDepartement.addEventListener('change', () => {
    // eslint-disable-next-line no-undef
    validateTypeDepartement();
});

// Fonctions de validation pour chaque champ
function validateTextNom() {
    if (textNom.value.trim() === '') {
        textNomError.textContent = 'Entrer un nom pour la procédure.';
    } else {
        textNomError.textContent = '';
    }
}

function validateTextLien() {
    if (textLien.value.trim() === '') {
        textLienError.textContent = 'Veuillez entrer un url valide';
    } else {
        textLienError.textContent = '';
    }
}


*/