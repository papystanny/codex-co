<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            <button id="ouvrirModalBtn" class="btn-filtre">
                <i class="fas fa-filter"></i> 
           </button>
        </div>
        <div class="historique-section">
            <div class="historique-unite">
               <i class="fa-solid fa-folder left-fontAwesome " ></i>
               <h5> ACCIDENT  DE TRAVAIL  </h5>
               <i class="fa-solid fa-check right-fontAwesome "></i>
               <span > 2023-08-11</span> 
            </div>
            <div class="historique-unite">
                <i class="fa-solid fa-folder left-fontAwesome " ></i>
                <h5> ACCIDENT  DE TRAVAIL  </h5>
                <i class="fa-solid fa-xmark  right-fontAwesome2 "></i>
                <span > 2023-08-11</span> 
             </div>
       </div>


        <div class="historique-section">
            <div class="historique-unite">
               <i class="fa-solid fa-user-tie  left-fontAwesome " ></i>
               <h5> AUCUN FORMULAIRE   </h5>
               <i class="fa-solid fa-xmark right-fontAwesome2 "></i>
               <span >Personne n'a rempli de formulaire </span> 
            </div>
       </div>



        <div class="accueil-titre">
                <h2> <b> MEMBRE D'ÉQUIPE </b>  </h2>
        </div>
        <div class="equipe-section">
            <div class="conteneur-scroll">
                    <div class="equipe-unite">
                    <i class="fa-solid fa-user-tie left-fontAwesome " ></i>
                    <h5> DEL PIERROT  </h5>    
                    </div>

                    <div class="equipe-unite">
                    <i class="fa-solid fa-user-tie left-fontAwesome " ></i>
                    <h5> SAMANTHA RIO </h5>
                    </div>

                    <div class="equipe-unite">
                        <i class="fa-solid fa-user-tie left-fontAwesome " ></i>
                        <h5> MARI ROSE DUMONT</h5>
                    </div>

                    <div class="equipe-unite">
                        <i class="fa-solid fa-user-tie left-fontAwesome " ></i>
                        <h5> STAN PHAREL  </h5>
                    </div>

                    <div class="equipe-unite">
                        <i class="fa-solid fa-user-tie left-fontAwesome " ></i>
                        <h5> FRANCK DUROCHER  </h5>
                    </div>

                    <div class="equipe-unite">
                        <i class="fa-solid fa-user-tie left-fontAwesome " ></i>
                        <h5> ALEXANDRE DUCHAMP  </h5>
                    </div>

                    <div class="equipe-unite">
                        <i class="fa-solid fa-user-tie left-fontAwesome " ></i>
                        <h5> AIME PARFAIT  </h5>
                    </div>

                    <div class="equipe-unite">
                        <i class="fa-solid fa-user-tie left-fontAwesome " ></i>
                        <h5> TRUDEAU MARCEL  </h5>
                    </div>

                    <div class="equipe-unite">
                        <i class="fa-solid fa-user-tie left-fontAwesome " ></i>
                        <h5> VALÉRIE LAPLANTE  </h5>
                    </div>
            </div>
       </div>

       <div class="historique-section">
           <div class="historique-unite">
              <i class="fa-solid fa-user-tie  left-fontAwesome " ></i>
              <h5> AUCUN MEMBRE   </h5>
              <i class="fa-solid fa-xmark right-fontAwesome2 "></i>
              <span > Vous n'avez pas d'employé en charge  </span> 
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
        <form id="formulaireFiltre">
            <label for="date_debut">Date de début :</label>
            <input type="date" id="date_debut" name="date_debut" required>

            <label for="date_fin">Date de fin :</label>
            <input type="date" id="date_fin" name="date_fin" required>

            <label for="type">Type de formulaire :</label>
            <select id="typeFormulaire" name="typeFormulaire" required>
                <option value="type2">Tous les formulaires </option>
                <option value="type1">Déclaration et accident de travail </option>
                <option value="type2">Signalement d'acte de violence </option>
@if( Session::get('typeCompte') == 'superieur')   
              <option value="type1">Type 1</option>
              <option value="type2">Type 2</option> 
@endauth
                <!-- Ajoutez d'autres options de type de formulaire au besoin -->
            </select>

            <label for="type">Nom de l'employe :</label>
            <select id="nomEmploye" name="nomEmploye" required>
                <option value="type2">Stan Pharel </option>
                <option value="type1">Laura Claire </option>
                <option value="type2">Iris Dubois</option>

                <!-- Ajoutez d'autres options de type de formulaire au besoin -->
            </select>
           
            <button type="submit">Rechercher</button> 
            <span class="close" id="fermerModal">&times;</span>
        </form>
    </div>
</div>