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
    
    <title> Procédures de travail</title>
</head>
<body>
    @extends('layouts.app')

    @section('contenu')

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="procedureAdminMain"> 
        <div class="procedureEnCours">

        <div class="titreProcedures">
            <span class="titre"> PROCEDURES EN COURS  </span> 
            <div>
                <button id="ouvrirModalBtn" class="btn-filtre"  style="border: none; background-color: transparent; cursor: pointer;margin-right:10px">
                            <i class="fas fa-plus fa-2x" style="color: rgb(99, 188, 85);" title="Ajouter de nouvelles procédures"></i>
                </button>
                <button id="ouvrirModalFiltreBtn" class="btn-filtre" style="border: none; background-color: transparent; cursor: pointer;">
                        <i class="fas fa-sort fa-2x" style="color: rgb(99, 188, 85);" title="Filtrer les formulaires"></i> 
                </button>
               
            </div>
        </div>

            <ul class="menuProcedures">
                 
                    @foreach($departements as $departement)

                            <span class="titre" style="color:blue;"> {{ ucwords($departement->nom) }} </span> 
                            @forelse($departement->proceduresTravails ?? [] as $procedure)
                                <li> 
                                    <div class="uniteProcedureAdmin" >
                                        {{-- Détails de la procédure --}}
                                        
                                        <i class="fa-solid fa-folder "></i>
                                        <div><span class="contentMenuElement">{{ mb_strtoupper($procedure->nom, 'UTF-8') }}</span></div>

                                        <i class="far fa-clock fa-2x"></i>
                                        <div><span class="contentMenuElement"> {{$procedure->created_at }} </span></div>
                                        
                                        <form action="{{ route('procedure.delete', ['departement' => $departement->id, 'procedure' => $procedure->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete-button" style="border: none; background-color: transparent; cursor: pointer;" title="Supprimer la procédure">
                                                <i class="fas fa-trash fa-2x"></i>
                                            </button>
                                        </form>
                                    </div>
                                </li>
                    
                            @empty
                            <li class="exclude-hover" style="border:1px solid red">
                                <div class="uniteProcedure">  
                                        <i class=" far fa-folder fa-2x"></i>
                                    
                                        <i class="fa-solid fa-xmark  " style="color:red;"></i>
                                </div>
                            </li>
                           {{-- <div style="margin-bottom:40px">

                            </div>--}} 
                            @endforelse
                        
                    @endforeach
        
            </ul>
        </div>
    </div> 
  
    @endsection
    <script src="js/employe/accueil.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/employe/accessoire/modal.js" defer></script>
    <script src="js/admin/procedure/ajoutProcedure.js" defer></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.delete-button').forEach(function (button) {
        button.addEventListener('click', function (event) {
            if (!confirm('Êtes-vous sûr de vouloir supprimer cette procédure ?')) {
                event.preventDefault();
            }
        });
    });
});
</script>

</body>
</html>




<div id="monModal" class="modal">
    <div class="modal-content">
        <div class="modalEnCours">

            <div class="titreProcedures">
                <span class="titre"> AJOUT DE PROCÉDURES  </span>  
                <span class="close" id="fermerModal">&times;</span>       
            </div>

            <ul class="modalMenu">
                <li>
                <form id="formulaireFiltre" action="{{ route('procedures.store') }}" method="POST">
                 @csrf
                        <div  class="sectionModal">
                            <label for="date_fin">Nom de la procédure :</label>
                            <input type="text" id="textNom" name="textNom" required>
                            <span class="text-danger" id="textNomError"></span>
                        </div>

                        <div  class="sectionModal">
                            <label for="date_debut">Lien de la procédure :</label>
                            <input type="text" id="textLien" name="textLien" required>
                            <span class="text-danger" id="textLienError"></span>
                        </div>

                        <div class="sectionModal">
                            <label for="type">Type de départements :</label>
                            <select id="type" name="typeDepartement" required>
                                    <option value="type2">Tous les départements</option>
                                @forelse($departements as $departement)
                                    <option value="{{ $departement->id }}">{{ ucwords($departement->nom) }}</option>
                                @empty
                                    <option value="">Aucun département disponible</option>
                                @endforelse
                                <!-- Ajoutez d'autres options de type de formulaire au besoin -->
                            </select>
                            <span class="text-danger" id="typeDepartementError"></span>
                        </div>
                        <div  class="submitModal">
                             <button type="submit">Ajouter</button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>   
    </div>
</div>


<div id="monModal1" class="modal">
    <div class="modal-content">
        <div class="modalEnCours">

            <div class="titreProcedures">
                <span class="titre"> FILTRE DE PROCÉDURES  </span>  
                <span class="close" id="fermerModal1">&times;</span>       
            </div>

            <ul class="modalMenu">
                <li>
                    <form id="procedureFiltre">
                

                        <div  class="sectionModal">
                            <label for="type">Départements concernés :</label>
                            <select id="type" name="nomDepartement" required>
                            <option value="type2">Tous les départements</option>
                            @forelse($departements as $departement)
                                    <option value="{{ $departement->id }}">{{ ucwords($departement->nom) }}</option>
                            @empty
                                <option value="">Aucun département disponible</option>
                            @endforelse
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
