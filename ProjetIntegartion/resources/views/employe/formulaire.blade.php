<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/employe/accueil.css')}}">
    <link rel="stylesheet" href="{{asset('css/employe/accessoire/filtre.css')}}">
    <link rel="stylesheet" href="{{asset('css/employe/accessoire/modal.css')}}">
    <link rel="stylesheet" href="{{asset('css/employe/formulaire.css')}}">
    <link rel="icon" href="https://tse1.mm.bing.net/th?id=OIP.BvE9Kz_K4pOY9ceOf4bLIQHaEK&pid=Api" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">

    <title> Formulaires</title>
</head>
<body>
    @extends('layouts.app')

    @section('contenu')

    <div class ="custom-span">
        <span>ACCUEIL > FORMULAIRES <span>
    </div>

    <div class="main-section">

        <div class="accueil-titre">
                <h2> <b> FORMULAIRE À REMPLIR </b>  </h2>
        </div>

        <div class="accueil-formulaire">
            
            <div class="formulaire">
                <h5> DÉCLARATION ACCIDENT DE TRAVAIL  </h5>
            </div>
            <div class="formulaire">
                <h5> SIGNALEMENT ACTE DE VIOLENCE  </h5>
            </div>
           
@if( Session::get('typeCompte') == 'superieur')   
            <div class="formulaire">
                <h5> AUDI SST  </h5>
            </div>    
@endauth
@if( Session::get('typeCompte') == 'superieur')   
            <div class="formulaire">
                <h5>MÉCANIQUE-RAPPORT D'ACCIDENT  </h5>
            </div>
 @endauth
        </div>

        <div class="accueil-titre">
            <h2> <b> HISTORIQUE FORMULAIRE </b>  </h2>
        </div>
        
        <div class="">
            <button id="ouvrirModalBtn" class="btn-filtre">
                 <i class="fas fa-filter"></i> 
            </button>

            <div class="historique-section">
                 
                <h5><i class="fa-solid fa-folder left-fontAwesome " ></i>DÉCLARATION  DE TRAVAIL <i class="fa-solid fa-check right-fontAwesome "></i> </h5>
                        <span > 2023-12-12</span>
            </div>

        </div>
        



       

    </div>


   
  
  

    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/employe/accessoire/modal.js" defer></script>
  

</body>
</html>



<div id="monModal" class="modal">
    <div class="modal-content">
        <span class="close" id="fermerModal">&times;</span>
        <h2>Filtre de recherche</h2>
        <form id="formulaireFiltre">
            <label for="date_debut">Date de début :</label>
            <input type="date" id="date_debut" name="date_debut" required>

            <label for="date_fin">Date de fin :</label>
            <input type="date" id="date_fin" name="date_fin" required>

            <label for="type">Type de formulaire :</label>
            <select id="type" name="typeFormulaire" required>
                <option value="type2">Tous les formulaires </option>
                <option value="type1">Déclaration et accident de travail </option>
                <option value="type2">Signalement d'acte de violence </option>
@if( Session::get('typeCompte') == 'superieur')   
              <option value="type1">Type 1</option>
              <option value="type2">Type 2</option> 
@endauth
                <!-- Ajoutez d'autres options de type de formulaire au besoin -->
            </select>

            <button type="submit">Rechercher</button>
        </form>
    </div>
</div>