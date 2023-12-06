<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
    <title>Document</title>
    <style>

.parent{
    background-color: grey;
   
    height:100%;
    width:50%;
}

.enfant
{
    border: solid black 1px;
    color: black;
}
.enfant1{
    background-color: white;
    color: black;
}
.enfant2{
    background-color: black;
}
.center {
  text-align: center;
}
.color{
    background-color: gray;
}
.red{
    color:red;
}
</style>
</head>
<body>

@extends('layouts.app')

@section('contenu')
           
<section class="main-container border" >
          <h2 class="titreForm align-items center">Formulaire Atelier Mécanique - Rapport d'accident </h2><br><br>
    <form method="post" action="{{ route('formulairesMec.store') }}" enctype="multipart/form-data">
          @csrf

          <div class="parent container-fluid">
             <div class="row h-25">
              
                <div class="enfant  col-lg-12 p-4"><h1>Atelier Mécanique - Rapport d'accident</h1></div>
             </div>
          </div><br><br>
            <div class = " center">
                <h3  class="titreForm col-12 p-4">
                    Bonjour
                    .Lorsque vous Soumettre ce formulaire,le propriétaire verra votre nom et votre adresse e-mail. </h3>         
            </div>
    
            <div class = " center">
                <h3  class="titreForm col-6 p-4">
                   Obligatoire* </h3>         
            </div>
            
            <div class = " center">
                <h3  class="titreForm col-8 p-4">
                1.Numéro(s) d'unités(s) impliqué(s)* 
                 </h3>         
            </div>
            <div class = " center">
            <input type="number" class="titreForm col-7 p-4 " placeholder="Entrez Votre Reponse"  class="form-control @error('numUniteImplique') is-invalid @enderror" id="numUniteImplique" name="numUniteImplique" aria-describedby="numUniteImplique">
                            @error('numUniteImplique')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror
            </div>
            <div class = " center">
                <h3  class="titreForm col-6 p-4">
                2.Département* 
                 </h3>         
            </div>
            <div class = " center">
            <input type="text" class="titreForm col-7 p-4 " placeholder="Entrez Votre Reponse"  value="{{old('departement')}}"  class="form-control @error('departement') is-invalid @enderror" id="departement" name="departement" aria-describedby="departement">
                            @error('departement')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror
            </div>     
             
            <div class = " center">
                <h3  class="titreForm col-8 p-4">
                4.Prenom et Nom du supérieur immédiat* 
                 </h3>         
            </div>
            <div class = " center">
            <input type="text" class="titreForm col-7 p-4 " placeholder="Entrez Votre Reponse" value="{{old('prenomNomSupImmediat')}}"   class="form-control @error('prenomNomSupImmediat') is-invalid @enderror" id="prenomNomSupImmediat" name="prenomNomSupImmediat" aria-describedby="prenomNomSupImmediat">
                            @error('prenomNomSupImmediat')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror
            </div>      
            <div class = " center">
                <h3  class="titreForm col-9 p-4">
                5.Numéro du permis de conduire de l'employé* 
                 </h3>         
            </div>
            <div class = " center">
            <input type="text" class="titreForm col-7 p-4 " placeholder="Entrez Votre Reponse" value="{{old('numPermisConduireEmploye')}}"   class="form-control @error('numPermisConduireEmploye') is-invalid @enderror" id="numPermisConduireEmploye" name="numPermisConduireEmploye" aria-describedby="numPermisConduireEmploye">
                            @error('numPermisConduireEmploye')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror
            </div> 
            <div class = " center">
                <h3  class="titreForm col-8 p-4">
                6.Autres Véhicules impliqués(Citoyen)* 
                 </h3>         
            </div>   
            <div class = " center titreForm col-6 p-2">
            <input type="checkbox" id="oui" name="vehiculeCityonImplique" value="oui" >
                        <label for="aviser">Oui</label>        
            </div>  

            <div class = " center titreForm col-6 p-2">
            <input type="checkbox" id="non" name="vehiculeCityonImplique" value="non" >
                        <label for="aviser">Non</label>        
            </div>        
            </div>
            <div class = " center titreForm col-12 p-4">
            <button type="submit" class="btn btn-primary col-4">Enregistrer</button>
            </div>                                             
    </form>
</section>   
 
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>

          
</body>
</html>