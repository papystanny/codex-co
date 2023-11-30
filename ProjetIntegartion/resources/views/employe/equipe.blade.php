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
    <link rel="stylesheet" href="{{asset('css/employe/equipe.css')}}">
    <link rel="stylesheet" href="{{asset('css/employe/accessoire/filtre.css')}}">
    <link rel="stylesheet" href="{{asset('css/employe/accessoire/modal.css')}}">
    <link rel="icon" href="https://tse1.mm.bing.net/th?id=OIP.BvE9Kz_K4pOY9ceOf4bLIQHaEK&pid=Api" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
    <title> Accueil</title>
</head>
<body>
    @extends('layouts.app')

    @section('contenu')

    <div class ="custom-span">
        <span>ACCUEIL >  ÉQUIPE <span>
    </div>


    <div class="main-section">
   

        <div class="accueil-titre">
            <h2> <b> FORMULAIRE D'ÉQUIPE </b>  </h2>
            <button id="ouvrirModalBtn" class="btn-filtre"  style="border: none; background-color: transparent; cursor: pointer;">
                <i class="fas fa-filter "  ></i> 
           </button>
        </div>

    <div class="historique-section2">
        @forelse($formulairesTous ?? [] as $formulaire)
        @if($formulaire->notifSup == 1 || $formulaire->notifSup == "oui") 
                <div class="historique-unite2" id="historique-section2">
                <div class="statut-container">
                        <span class="statut"> Traité</span>
                </div>
        @else
                <div class="historique-uniteVide" id="historique-section2">
                <div class="statut-container">
                        <span class="statut">  En Cours</span>
                </div>
        @endif

                    <div class="formulaire-info">
                                    <i class="fas fa-file-alt " style="font-size:25px"></i>
                                    <h5>{{ $formulaire->created_at}}</h5>
                @if($formulaire->notifSup == 0 || $formulaire->notifSup == "non")
                                    <i class="fa-solid fa-xmark  "style="color:red;"></i>             
                @elseif($formulaire->notifSup == 1 || $formulaire->notifSup == "oui")
                                        <i class="fa-solid fa-check   "style="color:green;"></i>
                @endif 
                    </div>
   
            <h5>{{ mb_strtoupper($formulaire->nomFormulaire, 'UTF-8') }}</h5>
            <h5>{{ ucfirst($formulaire->nomEmploye) }}</h5>
        </div>
    @empty
        <div class="historique-section x1" id="x1">
            <div class="historique-unite x2">
                <i class="fa-solid fa-user-tie left-fontAwesome"></i>
                <h5>AUCUN FORMULAIRE</h5>
                <i class="fa-solid fa-xmark right-fontAwesome2"></i>
                <span>Personne n'a rempli de formulaire</span> 
            </div>
        </div>
    @endforelse
    </div>
     


  



        <div class="accueil-titre">
                <h2> <b> MEMBRE D'ÉQUIPE </b>  </h2>
        </div>

    <div class="equipe-section">
            <div class="conteneur-scroll">
                @forelse($usagers ?? [] as $usager)        
                
                            <div class="equipe-unite">
                                <i class="fa-solid fa-user-tie left-fontAwesome " ></i>
                                <h5> {{$usager->nom}} {{$usager->prenom}} </h5>    
                            </div>
                       
                @empty
                    <div class="historique-section">
                    <div class="historique-unite">
                        <i class="fa-solid fa-user-tie  left-fontAwesome " ></i>
                        <h5> AUCUN MEMBRE   </h5>
                        <i class="fa-solid fa-xmark right-fontAwesome2 "></i>
                        <span > Vous n'avez pas d'employé en charge  </span> 
                    </div>
                    </div>
                @endforelse
            </div>
    </div>

 
                    
         
    





    </div>

    
      
       
  
 
    @endsection
    <script src="js/employe/accueil.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/employe/accessoire/modal.js" defer></script>
</body>
</html>




<div id="monModal" class="modal">
    <div class="modal-content">
       
        <h2>Filtre de recherche</h2>
        <form id="formulaireFiltrAccidentTravailEquipe" action="/filtrer-formulairesEquipes" method="POST" onsubmit="filtrerFormulaireAccidentTravailEquipe(event)">
             @csrf
             <label for="date_debut">Date de début :</label>
            <input type="date" id="date_debut" name="date_debut" required onchange="validateDates()">

            <label for="date_fin">Date de fin :</label>
            <input type="date" id="date_fin" name="date_fin" required onchange="validateDates()">

            <div id="dateError" style="color: red; margin-bottom:10px;"></div>

            <label for="type">Type de formulaire :</label>
            <select id="type" name="typeFormulaire" required>
                <option value="type1">Tous les formulaires </option>
                <option value="formaccidentstravails" data-formulaire="formaccidentstravails">Déclaration et accident de travail </option>
                <option value="formsitdangereuses" data-formulaire="usager_formsitdangereuse">Signalement d'acte de violence </option>
@if( Session::get('typeCompte') == 'superieur')   
                <option value="formulairesauditssts">Audi SST</option>
                <option value="formateliermecaniques">Rapport-Mécanique d'incident</option> 
@endauth
                <!-- Ajoutez d'autres options de type de formulaire au besoin -->
            </select>

            <label for="type">Nom de l'employe :</label>
            <select id="nomEmploye" name="nomEmploye" required>
                @forelse($usagers ?? [] as $usager)             
                    <option value="{{$usager->matricule}}">{{$usager->nom}} {{$usager->prenom}} </option>
                @empty
                @endforelse
            </select>
           
            <button type="submit">Rechercher</button> 
            <span class="close" id="fermerModal">&times;</span>
        </form>
    </div>
</div>