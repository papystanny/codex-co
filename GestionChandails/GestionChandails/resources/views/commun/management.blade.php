@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/Commun/management.css')}}">
@section('content')
        

@if(Auth::check())
<div class="container compteContainer">
    <h1 class="compteContainerTitle">Compte</h1>
    <div class="row1">

    <div class= "deux_un">

         <h1 class="titreDeuxRow">  <b> Informations </b>  </h1>

         <h3 style="margin-top:20px;"> <u> Nom</u>: {{Session::get('nom')}}  </h3>
         <h3> <u> Prenom</u>: {{Session::get('prenom')}}</h3>
         <h3> <u> Mot de passe</u>: xxxxxxxxxxx</h3>
         <button style="margin-top:20px;" class="hvr-grow" data-bs-toggle="modal" data-bs-target="#modalPassword"> Changer le mot de passe </button>

    </div>

    <div class= "deux_trois">
      <h1 class="titreDeuxRow">  <b> Détails </b>  </h1>
        @if( Session::get('statut') == 2)  <h2> <u> Statut</u>:  Administrateur </h2> 
            <p> En tant qu'administrateur, vous avez les accès à 80% du site. <p>
            <P> - Gérer une campage acive  </br> - Rajouter ou modier des articles </br> - Acceder aux campagnes passées </br> - Consulter les commandes      </p>
         @endif
         @if( Session::get('statut') == 3) 
            <h4 style="margin-top:20px;"> En tant que client, vous avez les accès à 50% du site. </h4>
            <P> - Création de compte </br> - Consulter les articles </br> - Passer une commande </br>     </p>
         @endif
    </div>

    </div>
</div>
@endif



@endsection
	   <!-- The Modal -->
       <div class="modal bg1" id="modalPassword">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header btn-danger ">
                <div class = "container-fluid">
                        <div class = "row align-items-center  ">
                                <div class= "col-xl-12 text-center col-md-12">
                                        <h4 class="modal-title text-center">Formulaire de confirmation</h4>                                       
                                        <hr class="HR blanc HR2">
                                        <br> 
                                        <p class="text-justify"> Entrer le nouveau mot de passe <b> votre mot de passe   </b> </p>      
                                                          
                                </div>
                        </div>
                </div>
              
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST"  action="/changerMdp" id="form1">
                    @csrf
                    <label id="icon" for="name"><i class="fas fa-user"></i></label>
                    <input type="text" name="password" id="name" placeholder="Nouveau mot de passe" required/>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
			    <button type="button" class="btn btn-warning" style=" width:60px;" data-bs-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-primary" form="form1" value="Submit"  style=" width:80px;"  >Changer</button>
            </div>
      
          </div>
        </div>
      </div>