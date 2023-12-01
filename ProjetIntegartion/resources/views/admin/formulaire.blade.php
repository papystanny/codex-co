<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/admin/procedure.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalizer.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/accessoire/filtre.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/accessoire/modal.css')}}">
    <link rel="icon" href="https://tse1.mm.bing.net/th?id=OIP.BvE9Kz_K4pOY9ceOf4bLIQHaEK&pid=Api" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
    <title> Formulaires</title>
</head>
<body>
    @extends('layouts.app')

    @section('contenu')
    <div class="procedureAdminMain"> 

        <div class="procedureEnCours">

            <div class="titreProcedures">
                <span class="titre"> FORMULAIRES EN COURS  </span> 
                
                <i class="fas fa-plus fa-2x"></i>              
             
            </div>

            <ul class="menuProcedures">

                <li> 
                    <a href="{{ route('admin.voirFormulaireRempli') }}">
                        <div class="uniteProcedure"> 
                            <i class="fa-solid fa-folder  fa-3x"></i>
                            <span class="contentMenuElement"> ACCIDENT DE TRAVAIL </span> 
                            <span class="contentMenuElement">EMPLOYE </span> 
                            <i class="fas fa-trash fa-2x"></i>
                        </div>
                    </a>
                </li>
                <li> 
                    <a href="{{ route('admin.voirFormulaireRempli') }}">
                        <div class="uniteProcedure"> 
                            <i class="fa-solid fa-folder  fa-3x"></i>
                            <span class="contentMenuElement"> ACTE DE VIOLENCE</span> 
                            <span class="contentMenuElement">EMPLOYE </span> 
                            <i class="fas fa-trash fa-2x"></i>
                        </div>
                    </a>
                </li>
                <li> 
                    <a href="{{ route('admin.voirFormulaireRempli') }}">
                        <div class="uniteProcedure"> 
                            <i class="fa-solid fa-folder  fa-3x"></i>
                            <span class="contentMenuElement"> AUDIT SST </span> 
                            <span class="contentMenuElement">SUPERIEUR </span> 
                            <i class="fas fa-trash fa-2x"></i>
                        </div>
                    </a>
                </li>
                <li> 
                    <a href="{{ route('admin.voirFormulaireRempli') }}">
                        <div class="uniteProcedure"> 
                            <i class="fa-solid fa-folder  fa-3x"></i>
                            <span class="contentMenuElement"> RAPPORT D'ACCIDENT </span> 
                            <span class="contentMenuElement">SUPERIEUR </span> 
                            <i class="fas fa-trash fa-2x"></i>
                        </div>
                    </a>
                </li>

            </ul>
        </div>

        <div class="procedureEnCours">

            <div class="titreProcedures">
                <span class="titre"> FORMULAIRES REMPLIS  </span> 
                <div>                 
                       <i class="far fa-clock fa-2x" style="margin-right:10px" title="Ranger du plus récent au plus ancien"></i> 
                     <button id="ouvrirModalBtn" class="btn-filtre">
                        <i class="fas fa-filter fa-2x" title="Filtrer les formulaires"></i> 
                    </button>

                </div>
               
            </div>

            <ul class="menuProcedures">
            @forelse($formulairesTous ?? [] as $formulaire)

            <li> 
            <a href="{{ route('Formulaires.index',[$formulaire->id])}}">
                    <div class="uniteProcedure"> 
                        <div class="">
                             <i class="fa-solid fa-clock "></i>
                            <span class="contentMenuElement">{{$formulaire->dateAccident}}</span> 
                        </div>
                        <div class="">
                              <i class="fa-solid fa-folder "></i>
                              <span class="contentMenuElement">{{ mb_strtoupper($formulaire->fonctionMomentEvenement, 'UTF-8') }}  </span> 
                        </div>
                        <div class="">
                             <i class="fa-solid fa-user-tie "></i>
                            <span class="contentMenuElement">{{$formulaire->nomEmploye}} </span> 
                        </div>
                        <div class="">
                             <i class="fa-solid fa-xmark  "></i>
                        </div>
                    </div>
              </a>
         
                </li>
            @empty
                <li> 
                    <div class="uniteProcedure">  
                              <i class="fa-solid fa-folder "></i>
                              <span class="contentMenuElement"> AUCUN FORMULAIRE REMPLI POUR LE MOMENT </span> 
                             <i class="fa-solid fa-xmark  "></i>
                    </div>
                </li>
            @endforelse

            

            

            </ul>
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
        <div class="modalEnCours">

            <div class="titreProcedures">
                <span class="titre"> FILTRE DE FORMULAIRE  </span>  
                <span class="close" id="fermerModal">&times;</span>       
            </div>

            <ul class="modalMenu">
                <li>
                    <form id="formulaireFiltre">
                        <div  class="sectionModal">
                            <label for="date_debut">Date de début :</label>
                            <input type="date" id="date_debut" name="date_debut" required>
                        </div>

                        <div  class="sectionModal">
                            <label for="date_fin">Date de fin :</label>
                            <input type="date" id="date_fin" name="date_fin" required>
                        </div>

                        <div  class="sectionModal">
                            <label for="type">Nom de l'employe :</label>
                            <select id="type" name="nomEmploye" required>
                                <option value="type2">Stan Pharel </option>
                                <option value="type1"> Williams Antons </option>
                                <option value="type3"> Lila Desmond </option>
                                <option value="type4"> Richie Duchar</option>
                                       <!-- Ajoutez d'autres options de type de formulaire au besoin -->
                             </select>
                        </div>

                        <div  class="sectionModal">
                            <label for="type">Type de formulaire :</label>
                            <select id="type" name="typeFormulaire" required>
                                <option value="type2">Tous les formulaires </option>
                                <option value="type1">Déclaration et accident de travail </option>
                                <option value="type3">Soins et sécurité  </option>
                                <option value="type4"> Paie et Pensoins</option>
                                       <!-- Ajoutez d'autres options de type de formulaire au besoin -->
                             </select>
                        </div>

                        <div  class="submitModal">
                             <button type="submit">Rechercher</button>
                        </div>
                     
                    </form>
                </li>
            </ul>
        </div>   
    </div>

    
</div>

