<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Info-Drip</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com"> 
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/hover.css')}}">
  <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
  <link rel="stylesheet" href="{{asset('css/Sondage.css')}}">
  <link rel="stylesheet" href="{{asset('css/Commun/footer.css')}}">
 
  <link rel="stylesheet" href="{{asset('css/Commun/barreDeRecherche.css')}}">
  <link rel="stylesheet" href="{{asset('css/buttonAnimeted.css')}}">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

  <script src="main.js"></script>
</head>
<body>
   <!-- Navbar -->
   <ul id="navbar">
      <div id="logo">
      @if( Session::get('statut') == 3)   <li><a href="/" class="hvr-grow"><i class="fa-solid fa-chevron-left fa-2xl"></i>Info-Drip<i class="fa-solid fa-chevron-right fa-2xl"></i></a></li>
      @else
      <li><a  class="hvr-grow"><i class="fa-solid fa-chevron-left fa-2xl"></i>Info-Drip<i class="fa-solid fa-chevron-right fa-2xl"></i></a></li>
      @endif
     
    </div>
      <div id="bouton">
        @if( Session::get('statut') == 2) <li><a href="/campagne" class="hvr-grow"><i class="fa-solid fa-file-circle-plus"></i> Campagne</a></li>  @endif 
        @if( Session::get('statut') == 1)  <li><a href="/superAdmin" class="hvr-grow"><i class="fa-solid fa-user-plus"></i> Ajouter un administrateur</a></li> @endif    <!-- Options pour Gestion admin depuis le superadmin -->
        @if( Session::get('statut') == 3) <li><a href="/panier" class="hvr-shrink"><i class="fa-solid fa-cart-shopping"></i> Panier</a></li>  @endif   <!-- Options de commander pour l'admin et le super admin -->
        @if(Auth::check())   <li><a href="/management" class="hvr-shrink"><i class="fa-solid fa-user"></i> Compte</a></li>   @endif   
        @if(!Auth::check())   <li><a href="/connexion" class="hvr-shrink"><i class="fa-solid fa-user"></i> Connexion</a></li>   @endif       <!-------------------- Informations compte connecté ---------------------> 
        @if(Auth::check())   <li> <form action="{{ route('logout') }}" method="POST" class="logout-buttonForm hvr-shrink"> @csrf <a onclick="this.closest('form').submit(); return false;" title="Se déconnecter" class="logout-button"><i class="fa-solid fa-right-from-bracket"></i> Déconnexion</a></form></li>@endif
      </div>
      
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
   </ul>
   <div id="burgerMenu">
      @if( Session::get('statut') == 2) <li><a href="/campagne" class="hvr-grow"><i class="fa-solid fa-file-circle-plus"></i> Campagne</a></li>  @endif 
      @if( Session::get('statut') == 1)  <li><a href="/superAdmin" class="hvr-grow"><i class="fa-solid fa-user-plus"></i> Ajouter un administrateur</a></li> @endif    <!-- Options pour Gestion admin depuis le superadmin -->
      @if( Session::get('statut') == 3) <li><a href="panier" class="hvr-shrink"><i class="fa-solid fa-cart-shopping"></i> Commandes</a></li>  @endif   <!-- Options de commander pour l'admin et le super admin -->
      @if(Auth::check())   <li><a href="/management" class="hvr-shrink"><i class="fa-solid fa-user"></i> Compte</a></li>   @endif   
      @if(!Auth::check())   <li><a href="/connexion" class="hvr-shrink"><i class="fa-solid fa-user"></i> Connexion</a></li>   @endif       <!-------------------- Informations compte connecté ---------------------> 
      @if(Auth::check())   <li> <form action="{{ route('logout') }}" method="POST" class="logout-buttonForm hvr-shrink"> @csrf <a onclick="this.closest('form').submit(); return false;" title="Se déconnecter" class="logout-button"><i class="fa-solid fa-right-from-bracket"></i> Déconnexion</a></form></li>@endif
    </div>
   @yield('content')

   <!-- Footer -->
    <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>À propos de nous</h6>
            <p class="text-justify">Info_Drip <i>EST CE QUI EST DE MEILLEUR  </i>  dans le monde du près à porter. Designer, assemblé et monté par des élèves du Cegep de Trois-Rivières, ce site propose aux étudiants de technique de l'informatique et d'ailleurs de se procurer des vêtements de qualité à l'éffigie du programme Technique en informatique.</p>
            @if( Session::get('statut') == 3)        <p class="text-justify"> Merci Mr, Mme  <b> {{Session::get('nom')}}  </b>  pour votre confiance !</p>  @endif
            @if( Session::get('statut') == 2)        <p class="text-justify"> Mr, Mme  <b> {{Session::get('nom')}}  </b> </br> Bienvenu parmi nous !</p>  @endif
            @if( Session::get('statut') == 1)        <p class="text-justify"> Mr, Mme  <b> {{Session::get('nom')}}  </b> </br> Bienvenu parmi nous!</p>  @endif
        </div>

          <div class="col-xs-6 col-md-3">
            <h6>Section</h6>  
            <ul class="footer-links">
            @if(Auth::check())
              <li><a href="/management">Compte</a></li>
              <li><a href="/articles">Article</a></li>
              <li><a href="/panier">Panier</a></li>
              <li><a href="#">Souhaits</a></li>     
              @if( Session::get('statut') == 1)    <li><a href="/superAdmin">Gestion des administrateur</a></li>   @endif
            @endif
            @if(!Auth::check())  <li><a href="/connexion">Se connecter</a></li> @endif
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>À savoir</h6>
            @if( Session::get('statut') == 3) <p class="text-justify">Pour le moment, le mode de paiement pour les commandes est en comptant. Lorsque la numérisation du système de paiement sera montée, on vous le laissera savoir !</p> @endif
            @if( Session::get('statut') == 2) <p class="text-justify"> Lorsque vous voudriez accepter des méthodes de paiement en  ligne, veuillez communiquez avec le service pour activer ce service déja concu dans l'application</p> @endif
            @if( Session::get('statut') == 1) <p class="text-justify"> En tant que <u> <b> super Administrateur </b> </u> , vous ne pouvez qu' ajouter ou supprimer des admninistrateurs.</p> @endif
            @if(!Auth::check()) <p>Vous devez vous identifier pour pouvoir utiliser ce site au complet </p> @endif
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
         <a href="#">CEGEP DE TROIS-RIVIÈRES</a>.
            </p>
            <h5> FRANCINE | STAN | ARNAUD</h5>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
            <li><a href="" title=""  class="hvr-shrink"><i class="fa-solid fa-user"></i></a></li>
            <li><a href="" title=""  class="hvr-shrink"><i class="fa-solid fa-user"></i></a></li>
            <li><a href="" title=""  class="hvr-shrink"><i class="fa-solid fa-user"></i></a></li>
             
            </ul>
          </div>
        </div>
      </div>
</footer>

</body>
</html>
<script src="https://kit.fontawesome.com/7cd2227a76.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/login.js" defer></script>
<script src="js/navbar.js" defer></script>

<script src="js/barreDeRecherche.js" defer></script>
