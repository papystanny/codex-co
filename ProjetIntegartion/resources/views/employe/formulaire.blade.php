<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            <h2> <b> HISTORIQUE FORMULAIRE </b> </h2>
            <button id="ouvrirModalBtn" class="btn-filtre">
                 <i class="fas fa-filter"></i> 
            </button>
        </div>
        
       
            

    <div class="historique-section" id="historique-section">

            @forelse($formulaires ?? [] as $formulaire)
            <div class="historique-unite">
                    <i class="fa-solid fa-folder left-fontAwesome " ></i>
                    <h5>{{ mb_strtoupper($formulaire->fonctionMomentEvenement, 'UTF-8') }}  </h5>
                    <i class="fa-solid fa-check right-fontAwesome "></i>
                    <span> {{$formulaire->created_at->format('d/m/Y') }}</span> 
                 </div>
            @empty
                
                    <div class="historique-unite">
                        <i class="fa-regular fa-folder left-fontAwesome " ></i>
                        <h5> AUCUN FORMULAIRE   </h5>
                        <i class="fa-solid fa-xmark right-fontAwesome2 "></i>
                        <span > Veuillez remplir un formulaire </span> 
                    </div>

            @endforelse

    </div>


   
  
  

    @endsection
 <!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<!-- Inclure Bootstrap JS après jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Inclure ton script modal.js -->
<script src="js/employe/accessoire/modal.js" defer></script>

  

</body>
</html>



<div id="monModal" class="modal">
    <div class="modal-content">
        <span class="close" id="fermerModal">&times;</span>
        <div class="">  <h2>Filtre de recherche</h2></div>
      
       <form id="formulaireFiltrAccidentTravail" action="/filtrer-formulaires" method="POST" onsubmit="filtrerFormulaireAccidentTravail(event)">
             @csrf
            <label for="date_debut">Date de début :</label>
            <input type="date" id="date_debut" name="date_debut" required>

            <label for="date_fin">Date de fin :</label>
            <input type="date" id="date_fin" name="date_fin" required>

            <label for="type">Type de formulaire :</label>
            <select id="type" name="typeFormulaire" required>
                <option value="type1" data-formulaire="formaccidentstravails">Tous les formulaires </option>
                <option value="formaccidentstravails" data-formulaire="formaccidentstravails">Déclaration et accident de travail </option>
                <option value="formsitdangereuses" data-formulaire="usager_formsitdangereuse">Signalement d'acte de violence </option>
@if( Session::get('typeCompte') == 'superieur')   
              <option value="type1">Audi SST</option>
              <option value="type2">Rapport-Mécanique d'incident</option> 
@endauth
                <!-- Ajoutez d'autres options de type de formulaire au besoin -->
            </select>
            
            <button type="submit">Rechercher</button>
        </form>
    </div>
</div>