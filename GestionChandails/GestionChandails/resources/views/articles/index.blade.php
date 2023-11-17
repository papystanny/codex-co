@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/Client/accueil.css')}}">




<style>
     
    
      .emoji {
        font-size: 72px;
        margin-bottom: 20px;
      }
    </style>
  </head>

@section('content')
@if(count($campagneActuels))

@foreach($campagneActuels as $campagne)
<div id="mainContainer">
    <h1 class="txtTop">Bienvenu sur Info-Drip!</h1>
    <img src="{{ asset('img/topBg.jpg') }}" alt="" id="topBg">
    <div class="container" style="margin-top: 35px;" >
        <div class="row " style="text-align:center;">
            <div class="col-sm-12 un_un" >
                <h1><u>Campagne active </u></h1>
            </div>
        </div>
        <div class="row"style="text-align:center; padding-top:10px; border-style: groove;" >
            <div class="col-sm-6 un_un borderPc">
                <h4> Nom de la campagne :  </h4>
            </div>
            <div class="col-sm-6 un_un" >
                <h2 style="text-transform: capitalize"> {{ $campagne->nom }} </h2>
            </div>
        </div>

        
    </div>


    <div id="det">
        <div class="row">
            <div class="col-sm-12 un_un detTitle" >
                <h1> Détails </h1>
            </div>
        </div>
        <div class="container">
            
            <div class="row ">
                    <div class="col-sm-12 col-md-6 un_un borderPc">
                        <div class="row ">
                        @if(!Auth::check())  <h3> Idées d'articles ?  </h3> @endif
                        @if(Auth::check())  <h3> Idées d'articles <b>  {{Session::get('nom')}}</b> ?   </h3> @endif
                        </div>
                        <div class="row messageDirectionRow" style="text-align:center; ">
                            <p> Cette information sera implémentée sous peu </p>
                            <p> Vous auriez la possibilité de proposer des d'articles au responsable de la campagne qu'il pourra rendre disponible s'il juge nécessaire.</p>
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 " style=" font-family:Georgia, 'Times New Roman', Times, serif;" >
                        <div class="row ">
                            <h3> Message de la direction ! </h3>
                        </div>
                        <div class="row messageDirectionRow" style="text-align:center; ">
                            <p> Vous pouvez donner votre intention d'achat de vote seulement <b>  <u> si la date prévu à cet  effet n'est pas dépassé ! </u> </b>  
                                </br> De plus, vous ne pouver que <u> <b>  passer la commande pour 5 articles. </u> </b> 
                            </p>
                        </div>
                    </div>

            </div>
        </div>
    </div>



    <div class="">
        <hr  width="70%" >
    </div>

    <div class="container-fluid">
        <div class="row articleHeader" style=" margin-top:35px;">
            <div class="col-sm-12 col-md-6 borderPc2">
                <h1> Articles  </h1>
            </div>

            <div class="col-sm-12 col-md-6" style="text-align:center; " >
                <p> Sachez que votre intention d'achat sera seulement  <br> prise en compte si la date indiquée n'est pas dépassée.   </p>
                <h3> Fin du sondage : <u> <b> {{ $campagne->finSondage}}  </b> </u>  </h3>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="articleContainer">          
        <div class="gridBox">
                @if(count($campagne->articles ))
                 @foreach ($campagne->articles as $article)
                 <form action="{{ route('commandes.store', [$article->id]) }}" method="POST" class="formArticle">
                        @csrf
                      
                            <!-- Main Zone -->
                            <article class="product">
                                <header>
                                    <img src="{{ $article->image }}" alt="">
                                </header>
                
                                <div class="content contentPad">
                                    <h1>{{ $article->nom }}</h1>
        
                                    <div class="zoomTaille">
                                    
                                        @foreach ($article->tailles as $taille)
                                            <div class="articleSize hvr-grow" onclick="setTaille('{{ $taille->id }}')">{{ $taille->nom }} </div>
                                        @endforeach
                                    </div>
                                    <input class="sizeInput" name="taille" type="hidden" id="tailleInput" value="1">
        
                                    <div class="articleShow">
                                        <div class="mySlides">
                                        @foreach ($article->couleurs as $couleur)
                                                <div  class="articleColorShow hvr-grow" title="{{ $couleur->id }}" style="background-color: {{ $couleur->hexcode }}" onclick="setColor('{{ $couleur->id }}')"   name="couleur"></div >
                                            @endforeach
                                        </div>
                                    </div>
                                    <input type="hidden" name="couleur" id="couleurInput" value="1">

                                    <div class="qty">
                                        <label for="quantitySelect">Quantité</label>
                                        <select id="quantitySelect" name="quantitySelect" class="quantitySelect">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                
                                <footer class="content">
                                    <div class="vBtn">

                 @if(Auth::check())   <button class="full-priceShow" type="submit"  > <i class="fa-solid fa-cart-plus fa-xl"></i></button>   @endif
                @if(!Auth::check())   <div class="full-priceShow" data-bs-toggle="modal" data-bs-target="#modalConnexion"  >  <i class="fa-solid fa-cart-plus fa-xl"></i>  </div>  @endif
                                       
                                    </div>
                
                                </footer>
                            </article>
                    </form>
                @endforeach
                @else
                <div class="alert alert-info">
                    <strong>Aucun article disponible</strong><br>
                    Nous sommes désolés, mais il n'y a aucun article à afficher pour le moment.
                </div>
                @endif
           
        </div>
    </div>
</div>
@endforeach
@else
    <div style="width: 50%;color:var(--dark); text-align:center; background-color: var(--light); border-radius: 2%; margin:280px auto 300px auto; padding-bottom: 50px;">
        <div class="emoji" style="padding:180px 180px 60px 180px;"><i class="fa-solid fa-triangle-exclamation fa-xl" style="color: #c21414;"></i></div>
        <div style="background-color: var(--lighter); border-radius: 2%; width: 90%; margin: 0 auto;">
            <h1>Désolé, il n'y a pas de campagne en cours pour le moment.</h1>
            <p>Merci de votre intérêt pour nos campagnes. Nous vous tiendrons informé(e) si de nouvelles opportunités se présentent.</p>
        </div>
    </div>
@endif

@endsection
<script src="{{ asset('js/article.js') }}" defer></script>

















	     <!-- --------------------------------------The Modal | Création de compte -->
         <div class="modal bg1" id="modalCreationCompte">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header btn-danger ">
                <div class = "container-fluid">
                        <div class = "row align-items-center  ">
                                <div class= "col-xl-12 text-center col-md-12">
                                        <h4 class="modal-title text-center"> Création de compte </h4>                                       
                                        <hr class="HR blanc HR2">
                                        <br> 
                                        <p class="text-justify">Veuillez entrer vos informations pour    <b> créer    </b> votre compte   </p>      
                                                          
                                </div>
                        </div>
                </div>
            </div>    
            <!-- Modal body -->
            <div class="modal-body">
              <form method="POST" action="/registerClient" id="form1">
                @csrf
                <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
                <input type="text" name="email" id="name" placeholder="courriel" required/>

                <label id="icon" for="name"><i class="fas fa-user"></i></label>
                <input type="text" name="nom" id="name" placeholder="nom" required/>

                <label id="icon" for="name"><i class="fas fa-user"></i></label>
                <input type="text" name="prenom" id="name" placeholder="prenom" required/>

				      <label id="icon" for="name"><i class="fas fa-password"></i></label>
                <input type="password" name="password" id="name" placeholder="mot de passe" required/>                       
              </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
			<button type="button" class="btn btn-warning" data-bs-dismiss="modal" style=" width:150px;" data-bs-toggle="modal" data-bs-target="#modalConnexion">Se connecter</button>
			
			<button type="button" class="btn btn-warning" style=" width:60px;" data-bs-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-primary" form="form1" value="Submit"  style=" width:80px;"  >Créer</button>
            </div>     
          </div>
        </div>
      </div>





	  	     <!-- --------------------------------------The Modal | Connexion -->
 <div class="modal bg1" id="modalConnexion">
        <div class="modal-dialog">
          <div class="modal-content">     
            <!-- Modal Header -->
            <div class="modal-header btn-danger ">
                <div class = "container-fluid">
                        <div class = "row align-items-center  ">
                                <div class= "col-xl-12 text-center col-md-12">
                                        <h4 class="modal-title text-center"> Se connecter </h4>                                       
                                        <hr class="HR blanc HR2">
                                        <br> 
                                        <p class="text-justify">Vous devez vous     <b> connecter    </b> pour poursuivre </p>
                                </div>
                        </div>
                </div>          
            </div>      
            <!-- Modal body -->
            <div class="modal-body">
              <form method="POST" action="/connexion" id="form2">
                @csrf          
                <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
                <input type="text" name="email" id="name" placeholder="courriel" required/>

				<label id="icon" for="name"><i class="fas fa-password"></i></label>
                <input type="password" name="password" id="name" placeholder="mot de passe" required/>           
              </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal" style=" width:140px;" data-bs-toggle="modal" data-bs-target="#modalCreationCompte">Créer un compte</button>
             <button type="button" class="btn btn-danger" style=" width:60px;" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" form="form2" value="Submit"  style=" width:80px;"   >Connexion</button>
            </div>     
          </div>
        </div>
      </div>

      <script>
        window.addEventListener("touchmove", function(event) {
        if (!event.target.classList.contains('scrollable')) {
            // no more scrolling
            event.preventDefault();
        }
        }, false);
      </script>




