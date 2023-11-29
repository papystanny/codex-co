<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/employe/accueil.css')}}">
    <link rel="icon" href="https://tse1.mm.bing.net/th?id=OIP.BvE9Kz_K4pOY9ceOf4bLIQHaEK&pid=Api" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
    <title> Accueil</title>
</head>
<body>
    @extends('layouts.app')

    @section('contenu')

    <div class ="custom-span">
        <span>ACCUEIL <span>
    </div>


    <div class="main-section">

        <div class="accueil-titre">
                <h2> <b> FORMULAIRE </b>  </h2>
        </div>

        <div class="accueil-formulaire">
            
            <div class="formulaire">
             <a href="/AccidentTravail">  <h5> DÉCLARATION ACCIDENT DE TRAVAIL  </h5> </a>
            </div>

            <div class="formulaire">
                <h5><a href="/AuditSST"> SIGNALEMENT ACTE DE VIOLENCE </a> </h5>
            </div>
@if( Session::get('typeCompte') == 'superieur')   
            <div class="formulaire">
                <h5 > <a href="/AuditSST">AUDI SST </a> </h5>
            </div>    
@endauth
@if( Session::get('typeCompte') == 'superieur')   
            <div class="formulaire">
                <h5>MÉCANIQUE-RAPPORT D'ACCIDENT  </h5>
            </div>
 @endauth
        </div>


        <div class="accueil-titre">
            <h2> <b> PROCÉDURES DE TRAVAIL </b>  </h2>
        </div>
       



    </div>

    
      
       
  
 
    @endsection
    <script src="js/employe/accueil.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>