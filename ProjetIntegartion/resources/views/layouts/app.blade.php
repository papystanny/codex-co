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
   
<div class="prenav-in" style="display:none;">
   <h7 class="" href="#"><i class="fas fa-sign-out-alt"></i><u> SE DÉCONNECTER </u></h7></li>          
</div> 



<nav class="navbar">
    <div class="left-section">

        <div class="logo">
            <img src="img/examen.png"  class="img-fluid logo-marge-10 " width="50px" height="50px">
        </div>

        <div class="department-name" style="display:none;">
            <span class="department ">SÉCURITÉ</span>
            <span class="employee"> John Doe</span>
        </div>

    </div>

    <div class="right-section" >

         <div class="center-section" style="display:none;">
            <div class="user-notifications">
                  <img src="img/userImg.png" class="img-fluid logo-marge-10" width="50" height="50px">
            </div>
         </div>

         <div class="hamburger-menu" style="display:none;">
            <input id="menu__toggle" type="checkbox" style="display:none;"/>
            <label class="menu__btn" for="menu__toggle">
               <span></span>
            </label>

            <ul class="menu__box">
               <li><a class="menu__item" href="#"><i class="fas fa-home"></i> ACCUEIL </a></li>
               <hr style="color: black;" />
               <li><a class="menu__item" href="#"><i class="far fa-clock"></i> FORMULAIRES </a></li>
               <hr style="color: black;" />
               <li><a class="menu__item" href="#"><i class="fas fa-folder"></i> MES EMPLOYES </a></li>
               <hr style="color: black;" />
               <li><a class="menu__item" href="#"><i class="fas fa-sign-out-alt"></i> SE DÉCONNECTER </a></li>
              
            </ul>
         </div>

         <div class="div-connexion">
             <h3><strong> CONNEXION </strong> </h3>
         </div> 

    </div>
</nav>



    @yield('contenu')

    
    <!-- END OF LINKS -->

    <!-- FOOTER -->
   

  
</body>
</html>


<script src="js/hamburger.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
