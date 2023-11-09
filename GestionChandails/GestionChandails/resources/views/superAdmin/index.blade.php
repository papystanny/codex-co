@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/superAdmin/gestionAdmin.css')}}">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
@section('content')

<div class="container superadminContainer">
  <div>
    <h1 class="superadminContainerTitle">Gestion des administrateurs</h1>
    <hr class="HR noir">
  </div>
  <div class="marginGrid">
    @if(count($admins))
     @foreach ($admins as $admin)
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="https://www.pngitem.com/pimgs/m/247-2472278_admin-admin-icon-png-transparent-png.png">
        </div>
        <div class="team-content">
          <h1 class="name black"> <u> {{$admin->nom}} </u> </h3>
          <h3 class="name black"> Poste : Administrateur</h3>
        </div>
        <ul class="social">
        <li><a href="" data-bs-toggle="modal" data-bs-target="#myModalSupprimer" title="Supprimer" class="hvr-shrink"><i class="fa-thin fa-trash fa-spin "></i></a></li>
        </ul>
      </div>

     <!-- The Modal -->
     <div class="modal bg1" id="myModalSupprimer">
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
                                        <p class="text-justify"> Voulez vous vraiment supprimer le compte de  <u> <b>{{$admin->nom}} ?</b> </u> </p>      
                                                          
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
              
            </div>
      
          </div>
        </div>
      </div>


     @endforeach
    @else
        <p> il n'ya pas de d'usager pour le moment.</P>
    @endif
  </div>
  

</br>
        <div class=" x col-12 col-sm-6 col-md-4 col-lg-2 d-flex">
        <button class="bn3637 bn38 " type="button" data-bs-toggle="modal" data-bs-target="#myModal">Ajouter</a > 
        </div>


        
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
                                  <p class="text-justify"> Le mot de passe sera généré  <b>aléatoirement </b> et sera envoyé par mail au concerné </p>      
                                                        
                          </div>
                  </div>
          </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST"  action="/creationAdmin" id="form1">
          @csrf
      
          <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
          <input type="text" name="email" id="email" placeholder="Courriel" required/>
          @error('emailc')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label id="icon" for="name"><i class="fas fa-user"></i></label>
          <input type="text" name="nom" id="nom" placeholder="Nom" required/>
          @error('nomc')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label id="icon" for="name"><i class="fas fa-user"></i></label>
          <input type="text" name="prenom" id="prenom" placeholder="Prenom" />
          @error('prenomc')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary" form="form1" value="Submit"  >Ajouter</button>
      </div>

    </div>
  </div>
</div>




</div>










@endsection