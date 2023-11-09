<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connexion.css">
	<link rel="stylesheet" href="css/style.css">
	
	
	
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

    <title>Connexion</title>
</head>
<body>



<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action="/register">
			@csrf
			<h1>Création de compte</h1>
			
			
			<input type="text" placeholder="nom" class="form-control nomc @error('nomc') is-invalid @enderror primary"  value="{{ old('nom') }}" name="nom"  />
@error('nomc')
	<span class="text-danger" style="color: red;">{{$message}} </span>
@enderror			
			<input type="text" placeholder="Prenom" class="form-control prenomc @error('prenomc') is-invalid @enderror primary" value="{{ old('prenom') }}" name="prenom"  />
@error('prenomc')
	<span class="text-danger" style="color: red;">{{$message}} </span>
@enderror

			<input type="email" placeholder="Courriel" class="form-control emailc @error('emailc') is-invalid @enderror primary"  value="{{ old('email') }}"  name="email" />
@error('emailc')
	<span class="text-danger" style="color: red;" >{{$message}} </span>
@enderror


			<input type="password" class="form-control passwordc @error('passwordc') is-invalid @enderror" placeholder="Mot de passe" value="{{ old('password') }}"   name="password" />
@error('passwordc')
	<span class="text-danger" style="color: red;">{{$message}} </span>
@enderror

			<button type="submit">Créer un compte</button>
			<script src="{{asset('js/jsvalidation.js')}}"></script>
			{!! JsValidator::formRequest('App\Http\Requests\UsagerRequest')!!} 
		</form>
	</div>

	<div class="form-container sign-in-container">
		<form method="post" action="/connexion">
			@csrf
			<h1 class="py-5 titreConnexion">Connexion</h1>
			<div class="social-container">
				<a href="https://fr-ca.facebook.com/cegeptr/" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>			
			<input type="email" placeholder="Courriel" class="form-control email @error('email') is-invalid @enderror primary"  value="{{ old('email') }}"  name="email"/>
@error('email')
	<span class="text-danger" style="color: red;" >{{$message}} </span>
@enderror
			<input type="password" class="form-control password @error('password') is-invalid @enderror" placeholder="Mot de passe" value="{{ old('password') }}"   name="password"/>
@error('password')
	<span class="text-danger" style="color: red;">{{$message}} </span>
@enderror
							
			<a href="#">Mot de passe oublié ?</a>
			<button type="submit">se connecter</button>

			<script src="{{asset('js/jsvalidation.js')}}"></script>
			{!! JsValidator::formRequest('App\Http\Requests\CreationURequest')!!} 
		</form>
	</div>

	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bon retour</h1>
				<p>Pour vous connecter ici avec vos informations personelles </p>
				<button class="ghost" id="signIn">Se connecter </button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Allo !</h1>
				<p>Entrer vos informations personelles pour commencer avec nous </p>
				<button class="ghost" id="signUp">Céer un compte</button>
			</div>
		</div>
	</div>
</div>



<script src="js/login.js" defer></script>

</body>
</html>