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
    <title>Ajout d'un film<</title>
</head>
<body>
    @extends('layouts.app')

    @section('contenu')
    <section class="main-container">
        <div class="container containerForm">
            <div style="width:50%;">
                <h1 class="titreForm">Ajout d'un film</h1>

                <form method="post" action="{{ route('films.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="text"  placeholder="Nom" value="{{old('nom')}}"   class="form-control @error('nom') is-invalid @enderror" id="nomFilm" name="nom" aria-describedby="nomFilm">
                        @error('nom')
                            <span class= "text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Genre" value="{{old('genre')}}"  class="form-control @error('genre') is-invalid @enderror" id="genreFilm" name="genre">
                        @error('genre')
                            <span class= "text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Année" value="{{old('annee')}}" class="form-control @error('annee') is-invalid @enderror" id="anneeFilm" name="annee">
                        @error('annee')
                            <span class= "text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Directeur" value="{{old('directeur')}}" class="form-control @error('directeur') is-invalid @enderror" id="directeurFilm" name="directeur">
                        @error('directeur')
                            <span class= "text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Durée" value="{{old('duree')}}" class="form-control @error('duree') is-invalid @enderror" id="dureeFilm" name="duree">
                        @error('duree')
                            <span class= "text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3"> 
                        <textarea class="form-control @error('description') is-invalid @enderror"  placeholder="Description" id="descriptionFilm" name="description" rows="3">{{old('description')}}</textarea>
                        @error('description')
                            <span class= "text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="imgFilm">Sélectionner une image</label><br>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="imgFilm" name="image">
                        @error('image')
                            <span class= "text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\FilmRequest') !!}
</body>
</html>