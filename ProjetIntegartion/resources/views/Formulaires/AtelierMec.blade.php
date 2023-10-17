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
            <input type="number" class="titreForm col-7 p-4 " placeholder="Entrez Votre Reponse"  class="form-control @error('reponseone') is-invalid @enderror" id="reponseone" name="reponseone" aria-describedby="reponseone">
                            @error('reponseone')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror
            </div>
            <div class = " center">
                <h3  class="titreForm col-6 p-4">
                2.Département* 
                 </h3>         
            </div>
            <div class = " center">
            <input type="text" class="titreForm col-7 p-4 " placeholder="Entrez Votre Reponse"   class="form-control @error('reponsetwo') is-invalid @enderror" id="reponsetwo" name="reponsetwo" aria-describedby="reponsetwo">
                            @error('reponsetwo')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror
            </div>     
            <div class = " center">
                <h3  class="titreForm col-8 p-4">
                3.Prenom et Nom de l'employé impliqué* 
                 </h3>         
            </div>
            <div class = " center">
            <input type="text" class="titreForm col-7 p-4 " placeholder="Entrez Votre Reponse" value="{{old('reponsetrois')}}"   class="form-control @error('reponsetrois') is-invalid @enderror" id="reponsetrois" name="reponsetrois" aria-describedby="reponsetrois">
                            @error('reponsetrois')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror
            </div>    
            <div class = " center">
                <h3  class="titreForm col-8 p-4">
                4.Prenom et Nom du supérieur immédiat* 
                 </h3>         
            </div>
            <div class = " center">
            <input type="text" class="titreForm col-7 p-4 " placeholder="Entrez Votre Reponse" value="{{old('reponsequatre')}}"   class="form-control @error('reponsequatre') is-invalid @enderror" id="reponsequatre" name="reponsequatre" aria-describedby="reponsequatre">
                            @error('reponsequatre')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror
            </div>      
            <div class = " center">
                <h3  class="titreForm col-9 p-4">
                5.Numéro du permis de conduire de l'employé* 
                 </h3>         
            </div>
            <div class = " center">
            <input type="number" class="titreForm col-7 p-4 " placeholder="Entrez Votre Reponse" value="{{old('reponsecinq')}}"   class="form-control @error('reponsecinq') is-invalid @enderror" id="reponsecinq" name="reponsecinq" aria-describedby="reponsecinq">
                            @error('reponsecinq')
                                <span class= "text-danger">{{$message}}</span>
                            @enderror
            </div> 
            <div class = " center">
                <h3  class="titreForm col-8 p-4">
                6.Autres Véhicules impliqués(Citoyen)* 
                 </h3>         
            </div>   
            <div class = " center titreForm col-6 p-2">
            <input type="checkbox" id="oui" name="oui" value="oui" >
                        <label for="aviser">Oui</label>        
            </div>  

            <div class = " center titreForm col-6 p-2">
            <input type="checkbox" id="non" name="non" value="non" >
                        <label for="aviser">Non</label>        
            </div>        
            </div>
            <div class = " center titreForm col-12 p-4">
            <button type="submit" class="btn btn-primary col-4 " href="{{ route('formulairesMec.create') }}">Enregistrer</button>
            </div>                                             
    </form>
</section>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>

          
</body>
</html>



