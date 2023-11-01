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
    <link rel="icon" href="https://tse1.mm.bing.net/th?id=OIP.BvE9Kz_K4pOY9ceOf4bLIQHaEK&pid=Api" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
    <title> Procédures de travail</title>
</head>
<body>
    @extends('layouts.app')

    @section('contenu')
    <div class="procedureAdminMain"> 
        <div class="procedureEnCours">
            <span class="titre"> PROCEDURES EN COURS  </span> 

            <ul class="menuProcedures">
                <li> 
                    <div class="uniteProcedure"> 
                        <i class="far fa-clock fa-3x"></i>
                        <span class="contentMenuElement"> Lire son talon de paie </span> 
                        <i class="fas fa-edit fa-2x"></i>
                        <span class="contentMenuElement"> Recouvrement </span> 
                        <i class="fas fa-trash fa-2x"></i>

                    </div>
                </li>

                <li> 
                    <div class="uniteProcedure"> 
                        <i class="far fa-clock fa-3x"></i>
                        <span class="contentMenuElement">Effectuer une plainte  </span> 
                        <i class="fas fa-edit fa-2x"></i>
                        <span class="contentMenuElement"> Sécurité      </span> 
                        <i class="fas fa-trash fa-2x"></i>

                    </div>
                </li>

                <li> 
                    <div class="uniteProcedure"> 
                        <i class="far fa-clock fa-3x"></i>
                        <span class="contentMenuElement"> Démissioner </span> 
                        <i class="fas fa-edit fa-2x"></i>
                        <span class="contentMenuElement"> Soins </span> 
                        <i class="fas fa-trash fa-2x"></i>

                    </div>
                </li>
            </ul>
        </div>
    </div> 
  
    @endsection
    <script src="js/employe/accueil.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>