<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titre')</title>
</head>
<body>
        <!-- HEADER -->
        <header>
      <div class="netflixLogo">
        <a id="logo"  href="{{ route('films.index') }}"><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true"  alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        <a href="{{ route('films.index') }}">Accueil</a>
        <a href="{{ route('acteurs.index') }}">Acteurs</a>
        @auth
          <a href="{{ route('films.create') }}">Ajout d'un film</a>
          <a href="{{ route('acteurs.create') }}">Ajout d'un acteur</a>
          <a href="{{ route('acteurfilm.create') }}">Ajout d'une relation</a>
          <a href="{{ route('usagers.create') }}">Ajout d'un usager</a>
          <a href="{{ route('acteurfilm.edit') }}">Suppression d'une relation</a>
        @endauth
      </nav>
      <nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <a href="{{route('usagers.index')}}">Usager</a>  
        @auth
        <form method="POST" action="{{route('logout')}}" style="display:inline;">
          @csrf
          <button type="submit" class="btnConnexion">Se déconnecter</button>
        </form>
        @else
          <a href="{{route('login')}}">Se connecter</a>  
        @endauth
      </nav>      
    </header>
    <!-- END OF HEADER -->
    <br><br><br>
    @if(isset($errors) && $errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      {{$error}}
      @endforeach
    </div>
    @endif
    <br>
    @if(session()->has('message'))
    <div class="alert alert-success">
      {{session()->get('message')}}
    </div>
    @endif
    @yield('contenu')

     <!-- LINKS -->
     <section class="link">
      <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <div class="sub-links">
        <ul>
          <li><a href="#">Audio and Subtitles</a></li>
          <li><a href="#">Audio Description</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Gift Cards</a></li>
          <li><a href="#">Media Center</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Legal Notices</a></li>
          <li><a href="#">Corporate Information</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </section>
    <!-- END OF LINKS -->

    <!-- FOOTER -->
    <footer>
      <p>&copy 1997-2018 Netflix, Inc.</p>
    </footer>
</body>
</html>