<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/hamburger.css')}}">
    <link rel="stylesheet" media="(max-width: 768px)" href="css/layout.css">

  
     <title>@yield('titre')</title>
</head>
<body>
 
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
@endauth


<nav class="navbar">
    <div class="left-section">

        <div class="logo">
            <img src="img/examen.png"  class="img-fluid logo-marge-10 " width="50px" height="50px">
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
               <li><a class="menu__item" href="#"><i class="fas fa-home"></i> ACCUEIL </a></li>
               <hr style="color: black;" />
               <li><a class="menu__item" href="#"><i class="far fa-clock"></i> FORMULAIRES </a></li>
               <hr style="color: black;" />
               <li><a class="menu__item" href="#"><i class="far fa-clock"></i> PROCÉDURES  </a></li>
@if( Session::get('typeCompte') == 'superieur')          
               <hr style="color: black;" />
               <li><a class="menu__item" href="#"><i class="fas fa-folder"></i> MES EMPLOYES </a></li> 
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



    @yield('contenu')

    
    <!-- END OF LINKS -->

    <!-- FOOTER -->
   

  
</body>
</html>


<script src="js/hamburger.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
