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
    <div class="procedureAdminMain"> 
        <div class="procedureEnCours">

        <div class="titreProcedures">
            <span class="titre"> PROCEDURES EN COURS  </span> 
            <div>
                <button id="ouvrirModalBtn" class="btn-filtre" style="margin-right:10px" >
                            <i class="fas fa-plus fa-2x"title="Ajouter de nouvelles procédures"></i>
                </button>
                <button id="ouvrirModalFiltreBtn" class="btn-filtre">
                        <i class="fas fa-filter fa-2x" title="Filtrer les formulaires"></i> 
                </button>
               
            </div>
        </div>

            <ul class="menuProcedures">
                <li> 
                    <div class="uniteProcedure"> 
                        <i class="far fa-clock fa-3x"></i>
                        <span class="contentMenuElement"> Lire son talon de paie </span> 
                        
                        <span class="contentMenuElement"> Recouvrement </span> 
                        <i class="fas fa-edit fa-2x"></i>
                        <i class="fas fa-trash fa-2x" title="Supprimer la procédure"></i>

                    </div>
                </li>

                <li> 
                    <div class="uniteProcedure"> 
                        <i class="far fa-clock fa-3x"></i>
                        <span class="contentMenuElement">Effectuer une plainte  </span> 
                        
                        <span class="contentMenuElement"> Sécurité      </span> 
                        <i class="fas fa-edit fa-2x"></i>
                        <i class="fas fa-trash fa-2x"  title="Supprimer la procédure"></i>

                    </div>
                </li>

                <li> 
                    <div class="uniteProcedure"> 
                        <i class="far fa-clock fa-3x"></i>
                        <span class="contentMenuElement"> Démissioner </span> 
                       
                        <span class="contentMenuElement"> Soins </span> 
                        <i class="fas fa-edit fa-2x"></i>
                        <i class="fas fa-trash fa-2x"  title="Supprimer la procédure"></i>

                    </div>
                </li>
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
                <span class="titre"> AJOUT DE PROCÉDURES  </span>  
                <span class="close" id="fermerModal">&times;</span>       
            </div>

            <ul class="modalMenu">
                <li>
                    <form id="formulaireFiltre">

                        <div  class="sectionModal">
                            <label for="date_fin">Nom de la procédure :</label>
                            <input type="text" id="textNom" name="textNom" required>
                        </div>

                        <div  class="sectionModal">
                            <label for="date_debut">Lien de la procédure :</label>
                            <input type="text" id="textLien" name="textLien" required>
                        </div>

                        <div  class="sectionModal">
                            <label for="type">Type de départements :</label>
                            <select id="type" name="typeDepartement" required>
                                <option value="type2">Tous les départements </option>
                                <option value="type1">Soins</option>
                                <option value="type3">Sécurité  </option>
                                <option value="type4"> Paie </option>
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


<div id="monModal1" class="modal">
    <div class="modal-content">
        <div class="modalEnCours">

            <div class="titreProcedures">
                <span class="titre"> FILTRE DE PROCÉDURES  </span>  
                <span class="close" id="fermerModal1">&times;</span>       
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
                            <label for="type">Départements concernés :</label>
                            <select id="type" name="nomEmploye" required>
                                <option value="type2"> </option>
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
