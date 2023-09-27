<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Page de connexion</title>
</head>
<body class="bg-secondary">
    
@extends('layouts.app')
@section('contenu')
@if(count($utilisateurs)) 

<section class="main-container" >

<div class="divTable">
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Email</th>
           
        </tr>
    </thead>
    <tbody>

    <h2 class="text-center">Mon compte</h2><br><br><br>
        @foreach($utilisateurs as $utilisateur)
        <h4>Bienvenue {{$utilisateur->prenom}} </h4>
        <br>
            <th scope="row">{{$utilisateur->id}}</th>
            <td>{{$utilisateur->nom}}</td>
            <td>{{$utilisateur->prenom}}</td>
            <td>{{$utilisateur->email}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>
</section>
@endif

@endsection
</body>
</html>