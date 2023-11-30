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
                <span class="titre"> FORMULAIRES REMPLIS  </span> 
                <div>                 
@if($formulairesTous->isEmpty())           
@else
                    <i class="far fa-clock fa-2x" style="color: rgb(99, 188, 85);margin-right:15px" title="Ranger du plus récent au plus ancien"></i>
                    <button id="ouvrirModalBtn" class="btn-filtre" style="border: none; background-color: transparent; cursor: pointer;">
                        <i class="fas fa-filter fa-2x " style="color: rgb(99, 188, 85);" title="Filtrer les formulaires"></i>
                    </button>
@endif
                 </div>
               
            </div>

            <ul class="menuProcedures">
            @forelse($formulairesTous ?? [] as $formulaire)
            <li> 
                    <div class="uniteProcedure"> 
                        <div class="">
                             <i class="fas fa-file-alt fa-2x"></i> 
                            <span class="contentMenuElement">{{ $formulaire->created_at->format('d/m/Y') }}</span> 
                        </div>
                        <div class="">
                              <i class="fa-solid fa-folder "></i>
                              <span class="contentMenuElement">{{ mb_strtoupper($formulaire->nomFormulaire, 'UTF-8') }}  </span> 
                        </div>
                        <div class="">
                                    <i class="fa-solid fa-user-tie "></i>
                                    <span class="contentMenuElement">{{$formulaire->nomEmploye}} </span> 
                        </div>
@if($formulaire->notifSup == 0 || $formulaire->notifSup == "non" )
                        <div class="" style="color:red;">
                            <i class="fa-solid fa-xmark  "></i>
                        </div>
@elseif($formulaire->notifSup == 1 || $formulaire->notifSup == "oui")
                         
                        <div class="" style="color:green;" title="Formualire ">
                            <i class="fa-solid fa-check   "></i>
                        </div>
@endif

@if($formulaire->notifAdmin == 0 || $formulaire->notifAdmin == "non" )
                        <div class="" style="color:red;">
                            <i class="fa-solid fa-xmark  "></i>
                        </div>
@elseif($formulaire->notifAdmin == 1 || $formulaire->notifAdmin == "oui")
                         
                        <div class="" style="color:green;" title="Formualire ">
                            <i class="fa-solid fa-check   "></i>
                        </div>
@endif
                        
                    </div>
            </li>
            @empty
                <li class="exclude-hover" style="border:1px solid red">
                    <div class="uniteProcedure" >  
                              <i class=" far fa-folder fa-2x"></i>
                              <span class="contentMenuElement"> AUCUN FORMULAIRE REMPLI POUR LE MOMENT </span> 
                             <i class="fa-solid fa-xmark  " style="color:red"></i>
                    </div>
                </li>
            @endforelse

            

            

            </ul>
        </div>

        <div class="procedureEnCours">

            <div class="titreProcedures">
                <span class="titre"> FORMULAIRES EN COURS  </span> 
                
                <i class="fas fa-plus fa-2x" style="color: rgb(99, 188, 85);"></i>              
             
            </div>

            <ul class="menuProcedures">

                <li> 
                    <a href="{{ route('admin.voirFormulaireRempli') }}">
                        <div class="uniteProcedure"> 
                            <div> <i class="fas fa-file-alt fa-2x"></i></div> 
                            <div> <span class="contentMenuElement"> ACCIDENT DE TRAVAIL </span> </div> 
                            <div> <span class="contentMenuElement">EMPLOYE </span> </div> 
                            <div> <i class="fas fa-trash fa-2x"></i>
                        </div></div>
                    </a>
                </li>
                <li> 
                    <a href="{{ route('admin.voirFormulaireRempli') }}">
                        <div class="uniteProcedure"> 
                            <div> <i class="fas fa-file-alt fa-2x"></i> </i></div> 
                            <div> <span class="contentMenuElement"> ACTE DE VIOLENCE</span> </div> 
                            <div><span class="contentMenuElement">EMPLOYE </span> </div> 
                            <div>  <i class="fas fa-trash fa-2x"></i></div> 
                        </div>
                    </a>
                </li>
                <li> 
                    <a href="{{ route('admin.voirFormulaireRempli') }}">
                        <div class="uniteProcedure"> 
                            <div> <i class="fas fa-file-alt fa-2x"></i></div> 
                            <div> <span class="contentMenuElement"> AUDIT SST </span> </div> 
                            <div> <span class="contentMenuElement">SUPERIEUR </span> </div> 
                            <div>   <i class="fas fa-trash fa-2x"></i></div> 
                        </div>
                    </a>
                </li>
                <li> 
                    <a href="{{ route('formulaires.atelierMec') }}">
                        <div class="uniteProcedure"> 
                            <div>    <i class="fas fa-file-alt fa-2x"></i></div>
                            <div>   <span class="contentMenuElement"> RAPPORT D'ACCIDENT </span> </div>
                            <div>  <span class="contentMenuElement">SUPERIEUR </span> </div>
                            <div>  <i class="fas fa-trash fa-2x"></i></div>
                        </div>
                    </a>
                </li>

            </ul>
        </div>

    </div> 
  
    @endsection
    <script>
        // Sélectionnez les icônes de filtre par leur ID
        const iconeFiltre1 = document.getElementById('iconeFiltre1');
        const iconeFiltre2 = document.getElementById('iconeFiltre2');

        // Sélectionnez la liste des formulaires (ou l'élément qui les contient)
        const menuProcedures = document.querySelector('.menuProcedures');

        // Vérifiez si la liste des formulaires est vide
        if (menuProcedures.children.length === 0) {
            // Cachez les icônes de filtre en définissant leur style sur "display: none"
            iconeFiltre1.style.display = 'none';
            iconeFiltre2.style.display = 'none';
        }
    </script>
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

