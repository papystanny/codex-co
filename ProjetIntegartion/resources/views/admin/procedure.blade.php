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
                <button id="ouvrirModalBtn" class="btn-filtre"  style="border: none; background-color: transparent; cursor: pointer;margin-right:10px" onclick="toggleFiltre()">
                            <i class="fas fa-plus fa-2x" style="color: rgb(99, 188, 85);" title="Ajouter de nouvelles procédures"></i>
                </button>
            
            </div>
        </div>

        <div id="ligneFiltre" class="ligneFiltre">
                <form id="formulaireFiltre" action="{{ route('procedures.store') }}" method="POST" class="formFiltre"  >
                @csrf
                    <div>
                        <label for="date_debut">nom</label>
                        <input type="text" id="textNom" name="textNom" required>
                    </div>
                    <div>
                        <label for="date_fin">lien</label>
                        <input type="text" id="textLien" name="textLien" required>
                    </div>
                    <div>
                        <label for="nomEmploye">département</label>
                        <select id="type" name="typeDepartement" required>
                                    <option value="type2">Tous les départements</option>
                                @forelse($departements as $departement)
                                    <option value="{{ $departement->id }}">{{ ucwords($departement->nom) }}</option>
                                @empty
                                    <option value="">Aucun département disponible</option>
                                @endforelse
                                <!-- Ajoutez d'autres options de type de formulaire au besoin -->
                        </select>
                    </div>
    
                    <div class="formFiltreButton">
                        <button type="submit">Ajouter</button>
                    </div>
                </form>
            </div>

            <ul class="menuProcedures">
                 
                    @foreach($departements as $departement)

                            <span class="titre" style="color:blue;"> {{ ucwords($departement->nom) }} </span> 
                            @if($departements->isEmpty())       
                                <div class="uniteProcedureHeader">
                                    <span><i class="fas fa-folder fa-2x"></i></span>
                                    <span> <i class="far fa-clock  fa-2x"></i></span>
                                </div>    
                            @else 
                               
                            @endif
                        
                            @forelse($departement->proceduresTravails ?? [] as $procedure)
                       

                        <div class="uniteProcedure">
                            <span>{{ mb_strtoupper($procedure->nom, 'UTF-8') }}</span>
                            <span>{{$procedure->created_at }}</span>
                            <button onclick="openModal('{{ mb_strtoupper($procedure->nom, 'UTF-8') }}', 'lien-de-la-procedure')" class="edit-button">
                                <i class="fas fa-edit fa-2x"></i>
                            </button>


                            <form action="{{ route('procedure.delete', ['departement' => $departement->id, 'procedure' => $procedure->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete-button" style="border: none; background-color: transparent; cursor: pointer;" title="Supprimer la procédure">
                                                <i class="fas fa-trash fa-2x"></i>
                                            </button>
                            </form>
                        </div>
                    
                            @empty
                            <div class="uniteProcedure formulaireNonPrisEnCharge exclude-hover">
                                <span>AUCUNE PROCEDURE EN COURS POUR CE DEPARTEMENT</span>
                            </div>
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

function toggleFiltre() {
                const ligneFiltre = document.getElementById('ligneFiltre');
                if (ligneFiltre) {
                    ligneFiltre.classList.toggle('ligneFiltre-visible');
                } else {
                    console.log("Erreur: L'élément 'ligneFiltre' n'a pas été trouvé.");
                }
            }



function openModal(procedureName, procedureLink) {
    document.getElementById('modalEditProcedure').style.display = 'block';
    document.getElementById('procedureName').value = procedureName;
    document.getElementById('procedureLink').value = procedureLink;
}

function closeModal() {
    document.getElementById('modalEditProcedure').style.display = 'none';
}

</script>

<div id="modalEditProcedure" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Modifier une procédure</h2>
        <form id="editProcedureForm">
            <label for="procedureName">Nom de la procédure</label>
            <input type="text" id="procedureName" name="procedureName" required>
            <label for="procedureLink">Lien de la procédure</label>
            <input type="text" id="procedureLink" name="procedureLink" required>
            <button type="submit">Modifier</button>
        </form>
    </div>
</div>


</body>
</html>
