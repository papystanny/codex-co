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
@if($formulairesTous->isEmpty())           
@else
                    <div>
                        <i id="iconeFiltre" class="fas fa-filter fa-2x" style="color: rgb(99, 188, 85); cursor: pointer;" title="Filtrer les formulaires"  onclick="console.log('Clicked')" ></i>
                    </div>
@endif
            </div>

            
            <!-- Ligne de filtre -->
            <div id="ligneFiltre" class="ligneFiltre">
                <form id="formulaireFiltre" class="formFiltre">
                    <input type="date" id="date_debut" name="date_debut" required>
                    <input type="date" id="date_fin" name="date_fin" required>
                    <select id="nomEmploye" name="nomEmploye" required>
                        <!-- Options d'employés ici -->
                    </select>
                    <select id="typeFormulaire" name="typeFormulaire" required>
                        <!-- Options de types de formulaire ici -->
                    </select>
                    <button type="submit">Rechercher</button>
                </form>
            </div>

            <div class="menuProcedures">
        <!-- En-têtes des colonnes -->
          

        @forelse($formulairesTous ?? [] as $formulaire)

                 <div class="uniteProcedureHeader">
                    <span><i class="far fa-clock fa-2x"></i></span>
                    <span> <i class="far fa-file-alt fa-2x"></i> </i></span>
                    <span><i class="far fa-user fa-2x"></i></span>
                    <span><i class="far fa-bell fa-2x"></i></span>
                    <span><i class="fas fa-bell fa-2x"></i></span>
                    <span><i class="fas fa-bell fa-2x"></i></span>
                </div> 
            
                @if($formulaire->notifAdmin == 1 || $formulaire->notifAdmin == 'oui')
                    <div class="uniteProcedure">
                @else
                    <div class="uniteProcedure formulaireNonPrisEnCharge exclude-hover ">
                @endif
                <span>{{ $formulaire->created_at->format('d/m/Y') }}</span>
                <span>{{ mb_strtoupper($formulaire->nomFormulaire, 'UTF-8') }}</span>
                <span>{{$formulaire->nomEmploye}}</span>
                @foreach($formulaire->usagers as $usager)
                    <span>{{ $usager->typeCompte }}</span>
                @endforeach
                  <!-- Icône pour notifSup -->
                <span style="color: {{$formulaire->notifSup == 1 || $formulaire->notifSup == 'oui' ? 'green' : 'red'}};">
                    @if($formulaire->notifSup == 1 || $formulaire->notifSup == 'oui')
                        <i class="fa-solid fa-check"></i>
                    @else
                        <i class="fas fa-spinner fa-spin fa-2x"></i>
                    @endif
                </span>

                <!-- Icône pour notifAdmin -->
                <span style="color: {{$formulaire->notifAdmin == 1 || $formulaire->notifAdmin == 'oui' ? 'green' : 'red'}};">
                    @if($formulaire->notifAdmin == 1 || $formulaire->notifAdmin == 'oui')
                        <i class="fa-solid fa-check"></i>
                    @else
                        <i class="fas fa-spinner fa-spin fa-2x"></i>
                    @endif
                </span>
            </div>
        @empty
        <div class="uniteProcedure formulaireNonPrisEnCharge exclude-hover">
            <span>AUCUN FORMULAIRE REMPLI POUR LE MOMENT</span>
        </div>
            <!-- Affichage lorsqu'aucun formulaire n'est disponible -->
        @endforelse
    </div>
</div>

        <div class="procedureEnCours">

            <div class="titreProcedures">
                <span class="titre"> FORMULAIRES EN COURS  </span> 
                
                <i class="fas fa-plus fa-2x" style="color: rgb(99, 188, 85);"></i>              
             
            </div>

            <div class="menuProcedures">

                <!-- En-têtes des colonnes -->
                    <div class="uniteProcedureHeader">
                        <span> <i class="far fa-file-alt fa-2x"></i> </i></span>
                        <span><i class="far fa-user fa-2x"></i></span>
                    </div> 

                    <div class="uniteProcedure exclude-hover"> 
                                <span > ACCIDENT DE TRAVAIL </span> 
                                <span >EMPLOYE </span>  
                    </div>

                    <div class="uniteProcedure exclude-hover"> 
                                <span > ACTE DE VIOLENCE </span> 
                                <span >EMPLOYE </span>  
                    </div>
                    
                    <div class="uniteProcedure exclude-hover"> 
                                <span > AUDIT SST</span> 
                                <span >SUPÉRIEUR </span>  
                    </div>

                    <div class="uniteProcedure exclude-hover"> 
                                <span > RAPPORT D'ACCIDENT </span> 
                                <span >SUPÉRIEUR </span>  
                    </div>

            </div>
        </div>

    </div> 
  
    @endsection
    <script>

        document.addEventListener('DOMContentLoaded', function() {
        const iconeFiltre = document.getElementById('iconeFiltre');
        const ligneFiltre = document.getElementById('ligneFiltre');

        console.log(document.getElementById('iconeFiltre'));


        iconeFiltre.addEventListener('click', function() {
    console.log("Click détecté");
    if (ligneFiltre.style.display === "none") {
        ligneFiltre.style.display = "flex";
    } else {
        ligneFiltre.style.display = "none";
    }
});

    </script>

    <script src="js/employe/accueil.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
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

