<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/accueil.css')}}">
    <link rel="stylesheet" href="{{asset('css/hamburger.css')}}">
    <link rel="stylesheet" media="(max-width: 768px)" href="css/layout.css">

  
     <title>@yield('titre')</title>
</head>
<body>
 

@if(Session::get('typeCompte') == 'superieur' || Session::get('typeCompte') == 'employe')
    @if(Auth::check())
            @csrf
                <div class="prenav-in" id="messageLogout" style="display:none" >
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a onclick="this.closest('form').submit(); return false;" class="logout-button"> 
                            <h6 class="" href="#"><i class="fas fa-sign-out-alt"></i><u> SE DÉCONNECTER </u></h6></li>  
                        </a>
                    </form>        
                </div> 

                <div class="prenav-in" id="messageWelcome"  style="display:none">               
                        <h5 class="" ><i class="fas fa-home"></i>  Bonjour <b>  {{Session::get('nom')}} </b></h5></li>                       
            </div> 
    @else
                <div class="prenav-in" id="messageWelcome" >               
                    <h5 class="" ><i class="fas fa-home"></i>  TrÈs Trois-Rivières </b></h5></li>                       
                </div> 
    @endauth


    <nav class="navbar">
        <div class="left-section">

            <div class="logo">
                <a href="{{ route('employe.accueil') }}">
                    <img src="img/examen.png"  class="img-fluid logo-marge-10 " width="50px" height="50px">
                </a>
            </div>
    @if(Auth::check())
            <div class="department-name">

                <span class="department ">SÉCURITÉ</span>
                <span class="employee" id="messageNom" style="display:none"> {{Session::get('nom')}}</span>
            </div>
    @endauth
        </div>

        <div class="right-section"   >
    @if(Auth::check())
            <div class="center-section"  >
                <div class="user-notifications">
                    <img src="img/userLogo1.png" class="img-fluid logo-marge-10" width="50" height="50px">
                </div>
            </div>

            <div class="hamburger-menu" >
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                <span></span>
                </label>

                <ul class="menu__box">
                <li><a class="menu__item" href="{{ route('employe.accueil') }}"><i class="fas fa-home"></i> ACCUEIL </a></li>
                <hr style="color: black;" />
                <li><a class="menu__item" href="{{ route('employe.formulaire') }}"><i class="far fa-clock"></i> FORMULAIRES </a></li>
                <hr style="color: black;" />
                <li><a class="menu__item" href="{{ route('employe.procedure') }}"><i class="far fa-clock"></i> PROCÉDURES  </a></li>
    @if( Session::get('typeCompte') == 'superieur')          
                <hr style="color: black;" />
                <li><a class="menu__item" href="{{ route('employe.equipe') }}"><i class="fas fa-folder"></i> MES EMPLOYES </a></li> 
    @endif
                <hr style="color: black;" />
                
                        <li><a class="menu__item" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> SE DÉCONNECTER </a></li> 
                                    
                </ul>
            </div>
    @endauth
    @if(!Auth::check())
            <div class="div-connexion"  >
                <h3><strong> CONNEXION </strong> </h3>
            </div> 
    @endauth
        </div>
    </nav>
@endauth

@if(Session::get('typeCompte') == 'admin' )
    <div class="navbarSectionAdmin">

        <div class="sidebar">
            <a href="{{ route('admin.accueil') }}">
                <img src="img/examen.png"  class="img-fluid logo-marge-10 " width="100px" height="100px">
            </a>
            <ul class="menu">
                <li><a href="#"><i class="fas fa-file-alt"></i> Formulaire</a></li>
                <li><a href="#"><i class="fas fa-users"></i> Équipe</a></li>
            </ul>
            <div class="logout">Déconnexion</div>
        </div>
        <div class="content">
            <!-- Contenu de la page -->
        </div>

    </div>



@endauth

    @yield('contenu')

    
    <!-- END OF LINKS -->

    <!-- FOOTER -->
@if(Session::get('typeCompte') == 'superieur' || Session::get('typeCompte') == 'employe')
    @if(Auth::check())
        <div class ="footer-section">
            <h2>  Ville de Trois-Rivières  </h2> 
            <div class="encadre-backgroundUn">
                <p href=""> 1325,place de l'Hotel-de-ville, C.P.368  Trois-Rivières, QC G9A 5H3</p>
            </div>

            <div class="encadre-background">
                <h3 href=""> <b>  Téléphone : 819 374-2002 </b> </h3> 
            </div>

            <div class="encadre-background">
                <h5 href=""> <u> Courriel : 311@v3r.net </u> </h5>
            </div>

            <p>© Ville de Trois-Rivières. Tous droits réservés. </p>

        </div>
    @endauth  
@endauth
  
</body>
</html>


<script src="js/hamburger.js" defer></script>
<script src="js/admin/navbar.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
