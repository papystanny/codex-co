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
    background-color: white;
    border: 1px solid black;
    height:100%;
    width:50%;
}

.enfant
{
    border: solid black 1px;
    color: white;
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
</style>
</head>
<body>

@extends('layouts.app')

@section('contenu')
           
<section class="main-container border" >
<h2 class="titreForm align-items center">Remplir le Formulaire de Signalement d'une Situation dangereuse,d'un acte de violence ou d'un passé proche</h2>
    <form method="post" action="{{ route('formulaires.store') }}" enctype="multipart/form-data">
          @csrf

          <div class="parent container-fluid">
             <div class="row h-25">
                <div class= "enfant enfant1 col-lg-6 p-4">&nbsp</div>
                <div class="enfant enfant2 col-lg-6 p-4"><h2>Création du Formulaire  Signalement d'une situation dangereuse,d'un acte de violence ou d'un  passé proche</h2></div>
             </div>
          </div>

          <div class="parent container-fluid">
              <div class="row center ">
                <div class= " enfant enfant1 col-lg-12 "><h2>Identification</h2></div>      
              </div>
          </div>

          <div class="parent container-fluid">
             <div class="row">
              
             </div>
          </div>

          <div class="parent container-fluid">
                <div class="row">
                        <div class= "enfant enfant1 col-lg-6 p-4">
                            <label for="fname">Fonction au moment de l'evenement:</label>
                            <input type="text"  placeholder="fonctionLorsEvenement" value="{{old('fonctionLorsEvenement')}}"   class="form-control @error('fonctionLorsEvenement') is-invalid @enderror" id="fonctionLorsEvenement" name="fonctionLorsEvenement" aria-describedby="fonctionLorsEvenement">
                                    @error('fonctionLorsEvenement')
                                        <span class= "text-danger">{{$message}}</span>
                                    @enderror
                        </div>
                        <div class= "enfant enfant1 col-lg-6 p-4">
                            <label for="fname">Secteur d'activité:</label><br>
                            <input type="text"  placeholder="secteurActivite" value="{{old('secteurActivite')}}"   class="form-control @error('secteurActivite') is-invalid @enderror" id="secteurActivite" name="secteurActivite" aria-describedby="secteurActivite">
                                    @error('secteurActivite')
                                        <span class= "text-danger">{{$message}}</span>
                                    @enderror
                        </div>
                </div>
           </div>
          <div class="parent container-fluid">
                <div class="row center ">
                    <div class= " enfant enfant1 col-lg-12 "><h3>Description de la situation dangereuse ou du passé proche</h3></div>      
                </div>
                <div class="row">
                        <div class= "enfant enfant1 col-lg-12 p-4">
                            <input type="text"  placeholder="descriptionEvenement" value="{{old('descriptionEvenement')}}"   class="form-control @error('descriptionEvenement') is-invalid @enderror" id="descriptionEvenement" name="descriptionEvenement" aria-describedby="descriptionEvenement">
                                    @error('descriptionEvenement')
                                        <span class= "text-danger">{{$message}}</span>
                                    @enderror
                        </div>
                </div>
          </div>

        <div class="parent container-fluid">
            <div class="row">
                    <div class= "enfant enfant1 col-lg-4 p-4">                              
                    
                        <label for="Date">Date de L'Observation:</label>
                        <input type="date" id="dateObservation" name="dateObservation" value="{{old('dateObservation')}}"   class="form-control @error('dateObservation') is-invalid @enderror" id="dateObservation" name="dateObservation" aria-describedby="dateObservation">
                        @error('dateObservation')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror
                    
                    </div>
                    <div class= "enfant enfant1 col-lg-4 p-4">
                        
                            <label for="heure">Heure de L'Observation:</label><br>
                            <input type="time" id="heureObservation" name="heureObservation" value="{{old('heureObservation')}}"   class="form-control @error('heureObservation') is-invalid @enderror" id="heureObservation" name="heureObservation" aria-describedby="heureObservation">
                            @error('heureObservation')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror
                    
                    </div>
                    <div class= "enfant enfant1 col-lg-4 p-4">
                    
                        <label for="fname">Témoin(s):</label>
                        <input type="text"  placeholder="Temoins" value="{{old('temoins')}}"   class="form-control @error('temoins') is-invalid @enderror" id="temoins" name="temoins" aria-describedby="temoins">
                            @error('temoins')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror
                    </div>
              
            </div>
        </div>
     
          <div class="parent container-fluid">
                <div class="row">
                    <div class= " enfant enfant1 col-lg-12 "><h4>Correction(s) ou amélioration(s) proposée(s)</h4></div> 
                    <input type="text"  placeholder="AmeliorationsProposees" value="{{old('ameliorationsProposees')}}"   class="form-control @error('ameliorationsProposees') is-invalid @enderror" id="ameliorationsProposees" name="ameliorationsProposees" aria-describedby="ameliorationsProposees">
                            @error('ameliorationsProposees')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror   
                </div>
         </div>
         <div class="parent container-fluid">
                <div class="row ">
                    <div class= " color enfant enfant1 col-lg-12 ">&nbsp</div>      
                </div>
          </div>


        <button type="submit" class="btn btn-primary col-4  align-items center ">Enregistrer</button>
</form>
</section>   

@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>

          
</body>
</html>