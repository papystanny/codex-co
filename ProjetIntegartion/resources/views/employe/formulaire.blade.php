<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/employe/accueil.css')}}">
    <link rel="stylesheet" href="{{asset('css/employe/filtre.css')}}">
    <link rel="icon" href="https://tse1.mm.bing.net/th?id=OIP.BvE9Kz_K4pOY9ceOf4bLIQHaEK&pid=Api" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title> Formulaires</title>
</head>
<body>
    @extends('layouts.app')

    @section('contenu')

    <div class ="custom-span">
        <span>ACCUEIL > FORMULAIRES <span>
    </div>

    <div class="main-section">

        <div class="accueil-titre">
                <h2> <b> FORMULAIRE À REMPLIR </b>  </h2>
        </div>

        <div class="accueil-formulaire">
            
            <div class="formulaire">
                <h5> DÉCLARATION ACCIDENT DE TRAVAIL  </h5>
            </div>
            <div class="formulaire">
                <h5> SIGNALEMENT ACTE DE VIOLENCE  </h5>
            </div>
           
@if( Session::get('typeCompte') == 'superieur')   
            <div class="formulaire">
                <h5> AUDI SST  </h5>
            </div>    
@endauth
@if( Session::get('typeCompte') == 'superieur')   
            <div class="formulaire">
                <h5>MÉCANIQUE-RAPPORT D'ACCIDENT  </h5>
            </div>
 @endauth
        </div>

        <div class="accueil-titre">
            <h2> <b> HISTORIQUE FORMULAIRE </b>  </h2>
        </div>
        

       
        <button type="button"  data-toggle="modal" data-target="#myModal">
            <i class="fas fa-filter"></i> Filtre
        </button>
        


       

    </div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>

    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.2/js/bootstrap.min.js"></script>

</body>
</html>

