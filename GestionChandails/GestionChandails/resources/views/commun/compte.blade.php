@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/Commun/compte.css')}}">
@section('content')
        

<!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->

<aside class="profile-card">

    <header>

        <!-- here’s the avatar --> 
        @if( Session::get('statut') == 1)    <img src="https://w7.pngwing.com/pngs/585/178/png-transparent-system-administrator-computer-icons-user-others-business-web-browser-user-thumbnail.png"> @endif
        @if( Session::get('statut') == 3)    <img src="https://www.pngitem.com/pimgs/m/463-4634060_crm-my-client-client-icon-hd-png-download.png"> @endif
    

        <!-- the username -->
        <h1> {{Session::get('nom')}}</h1>

        <!-- and role or location -->
        <h2> {{Session::get('prenom')}}</h2>



    </header>

    <!-- bit of a bio; who are you? -->
    <div class="profile-bio black" >

        <p>Email : {{Session::get('email')}}. </p>
            <br>
        <p>Mot de passe : .........</p>

        </br>
        <button class="bn3637 bn38 " type="button" data-bs-toggle="modal" data-bs-target="#myModal">Changer le Mdp</a > 
           
    </div>

    

</aside>
<!-- that’s all folks! -->


 <!-- The Modal -->
 <div class="modal bg1" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header btn-danger ">
                <div class = "container-fluid">
                        <div class = "row align-items-center  ">
                                <div class= "col-xl-12 text-center col-md-12">
                                        <h4 class="modal-title text-center">Formulaire à remplir </h4>                                       
                                        <hr class="HR blanc HR2">
                                        <br> 
                                        <p class="text-justify"> Le mot de passe sera généré  <b>aléatoirement </b> </p>      
                                                          
                                </div>
                        </div>
                </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
             
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-primary" form="form1" value="Submit"  >Ajouter</button>
            </div>
      
          </div>
        </div>
      </div>


@endsection