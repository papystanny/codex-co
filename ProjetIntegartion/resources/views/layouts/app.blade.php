<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" media="(max-width: 768px)" href="styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>@yield('titre')</title>
</head>
<body>
        <!-- HEADER -->
        <header>
        <nav class="main-nav"> 
        <div class="container-fluid parent">
                <div class="row  text-center h-100 border ">
                        <div class="">
                           <img src="img/examen.png" class="fluid" width="100px" height="100px"><br>
                       </div>
                       <div class="">
                          <h6>TRANSPORT DE MATERIAUX</h6>
                       </div>
                       <div class=" bg">
                          <i class="fa-solid fa-user fa-6x"></i>
                       </div>   
                       <div class="">
                       @auth
                           <form method="POST" action="{{route('logout')}}" style="display:inline;">
                              @csrf
                              <button type="submit" class="btnConnexion">Se déconnecter</button>
                           </form>
                           @else
                              <a href="{{route('Formulaires.login')}}">Se connecter</a>  
                           @endauth
                       </div> 
                       
                </div>
        </div> 
      </nav>
     
    </header>
    <!-- END OF HEADER -->
    <br><br><br>
 
    @yield('contenu')

    
    <!-- END OF LINKS -->

    <!-- FOOTER -->
    <footer>
    <div class="row align-items-center text-center h-100  py-5">
      <p>&copy 1997-2018 Netflix, Inc.</p>
    </footer>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>