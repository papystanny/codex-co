@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/Commun/panier.css')}}">
<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
@section('content')
<body>


  <div class="panierContainer relativePosition">
    <div class="container-fluid">

      <div class="row iJustify"> 
      
        <div class ="col-sm-12 col-md-12 col-xl-7 containerGauche mainContainer">
          @if(count($commandes))
          @foreach($commandes as $commande)
    
            <article class="productCart">
              <span class="cartContainer">
                <div class="content">
                  <h1 class="m-0 mt-2 p-0">{{ $commande->nom_article }}</h1>
                  <hr>
                  <div class="p-0">
                    <footer class="content col-sm-12 col-md-12 borderB">
                      <span class="qt">Quantité :    </span>
                      <h2 class=""  style=" display:flex; float:right; padding-right:20px;" >{{$commande->quantite}}</h2>
                    </footer>
                    <footer class="content col-sm-12 col-md-12 borderB">
                      <span class="qt">Taille : </span>
                      <h2 class=""  style=" display:flex; float:right; padding-right:20px;" >
                      {{$commande->taille_article}} 
                      </h2>
                    </footer>
                    <footer class="content col-sm-12 col-md-12">
                      <span class="qt">Couleur :</span>
                      <div  class="articleColor"  style="background-color: {{ $commande->hexcode }}; display:flex; float:right;" ></div >
                    </footer>  
                      <form method="POST" action="{{route('commandes.destroy',[$commande->id]) }}">
                        @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btnDel btnCamp btnPrimary">
                              <i class="fa-solid fa-trash-can"></i>
                          </button>
                      </form>
                  </div>
                </div>
  
                
              </span>
            </article>

           
          @endforeach
          @else
          <div class="noArticlesMessage">
              <h2>Désolé, aucun article n'est disponible pour l'instant.</h2>
              <p>Vous devez commander un article au préalable pour le voir dans votre panier!</p>
          </div>

          @endif
         
      </div>
    
      
        <div class="col-sm-12 col-md-12 col-xl-4 containerDroit m-0 p-0">
          <div class="content secondContainer  mb-4">
            <h1 class="TitreContainerDroit " style = "font-family:Verdana, Geneva, Tahoma, sans-serif;"> Panier</h1>
            <p> Vous avez la capacité de rétirer un article de votre panier. <u style ="color : blue;">  ( Veuillez survoler l'article en question) </u>
            </br>Veuillez comprendre que la politique de l'établissement ne permet pas un paiement en ligne comme </br> cela se fait dans la plupart des sites de ventes en lignes. 
            Néanmoins, quand cela sera possible, vous </br> en seriez informé. </br>
            @if(count($campagneActuels))
              @foreach($campagneActuels as $campagne)
                  La date butoire pour la prise d'intention est le : <b> {{$campagne->finSondage}} </b> 
              @endforeach
            @endif
            </p>
            
          </div>
    
          <div class="btnAjouter sectionAjouterReduction secondContainer mb-4"> 
            <input type="text" placeholder="Bon de réduction"> </input>
            <button type="submit" data-bs-toggle="modal" data-bs-target="#myModal" class="otherButton1"> Ajouter</button>
          </div>
    
          <div class="sectionInfoQuestion secondContainer mb-4">
            <h2> Une question ? Contacter-nous au 455-899-5632 </h2>
          </div>
    
          <div class="sectionValidercommande secondContainer">
          @if($nbrCommandes != 0)
            <span> <b> Nombre d'articles  : </b>{{ $nbrCommandes }}</span>
          @else
            <span>Aucun article pour l'instant.</span>
          @endif
    
          </br>	<hr > </br>
    
          <div style=" display:flex; justify-content:end;">
            <div class="row">
              <a href="/" class="backButton hvr-grow">Continuer mes achats</a>
            </div>
          </div>
    
          </div>
    
        </div>
      
      </div>
    
    
    </div>
  </div>


</body>

@endsection 
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="./js/script.js"></script> 
    <script src="{{ asset('js/article.js') }}" defer></script>






	
 <!-- The Modal -->
 <div class="modal bg1" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header btn-danger ">
                <div class = "container-fluid">
                        <div class = "row align-items-center  ">
                                <div class= "col-xl-12 text-center col-md-12">
                                        <h4 class="modal-title text-center">Message de la direction ! </h4>                                       
                                        <hr class="HR blanc HR2">
                                        <br> 
                                        <p class="text-justify"> Désolé, mais  </br> les bons de réduction ne sont pas encore  <b>appliqués  </b> dans le système. </br> Lorsque celà sera implémenté, vous pourriez appliquer des coupons. </p>      
                                                          
                                </div>
                        </div>
                </div>
              
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
             
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Compris !</button>
            </div>
      
          </div>
        </div>
      </div>


	   <!-- The Modal -->
 <div class="modal bg1" id="ModdalDelete">
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
                                        <p class="text-justify"> Êtes-vous sur de vouloir   <b>supprimer   </b> cet aticle </p>      
                                                          
                                </div>
                        </div>
                </div>
             
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
            <form method="POST" action="{{route('commandes.destroy',[$commande->id]) }}">
              @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
              
              
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-warning" style=" width:60px;" data-bs-dismiss="modal">Annuler</button>
                  <button type="submit" class="btn btn-primary" form="form1" value="Submit"  style=" width:80px;"  >Supprimer</button>
              </div>
            </form>
      
          </div>
        </div>
      </div>


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

              <form method="POST" action="/connexion" id="form1">
                @csrf
            
                <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
                <input type="text" name="email" id="name" placeholder="courriel" required/>

                <label id="icon" for="name"><i class="fas fa-user"></i></label>
                <input type="text" name="nom" id="name" placeholder="nom" required/>

                <label id="icon" for="name"><i class="fas fa-user"></i></label>
                <input type="text" name="prenom" id="name" placeholder="prenom" required/>

				<label id="icon" for="name"><i class="fas fa-password"></i></label>
                <input type="text" name="password" id="name" placeholder="mot de passe" required/>
            
            
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

              <form method="POST" action="/register" id="form1">
                @csrf
            
                <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
                <input type="text" name="email" id="name" placeholder="courriel" required/>

				<label id="icon" for="name"><i class="fas fa-password"></i></label>
                <input type="text" name="password" id="name" placeholder="mot de passe" required/>
            
              </form>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
			<button type="button" class="btn btn-warning" data-bs-dismiss="modal" style=" width:140px;" data-bs-toggle="modal" data-bs-target="#modalCreationCompte">Créer un compte</button>
			<button type="button" class="btn btn-danger" style=" width:60px;" data-bs-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-primary" form="form1" value="Submit"  style=" width:80px;"  >Connexion</button>
            </div>
      
          </div>
        </div>
      </div>