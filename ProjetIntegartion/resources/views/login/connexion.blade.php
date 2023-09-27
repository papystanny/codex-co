<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Connexion</title>
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/login/login.css')}}">
    <link rel="icon" href="https://tse1.mm.bing.net/th?id=OIP.BvE9Kz_K4pOY9ceOf4bLIQHaEK&pid=Api" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  
    <title> Page de Connexion</title>
</head>
<body>
    @extends('layouts.app')

    @section('contenu')

   
    <div class="container">
        <h2>Connexion</h2>
        <form  method="POST" action="/connexion"> <!-- Remplacez "login.php" par le script de traitement de la connexion -->
        @csrf
            <div class="form-group">
                <label for="username">Nom d'utilisateur :</label>
                <input type="number" id="username" name="matricule" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>
    </div>

  
 
    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
   
</body>
</html>