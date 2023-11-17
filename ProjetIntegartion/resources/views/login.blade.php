<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title> Page de Connexion</title>
</head>
<body>
    @extends('layouts.app')

    @section('contenu')
    <section class="main-container  align-items-center text-center h-100  py-5">
        <div class="container containerForm">
            <div style="width:50%;">
                <h1 class="titreForm">Connexion</h1>
                    <form method="POST"action="{{ route('login')}}">
                        @csrf
                        <div class="mb-6 ">
                            <input type="matricule" class="form-control" id="matricule" name="matricule" aria-describedby="emailHelp" placeholder="Matricule" required>
                        </div>
                        <div class="mb-6 py-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Se Connecter</button>

                    </form>
                </h1>
            </div>
        </div>
    </section>
    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
   
</body>
</html>