@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
    <link rel="stylesheet" href="css/Sondage.css">
    <link rel="stylesheet" href="css/virtual-select.min.css">
    <title>Document</title>
</head>
<body>

<!--@forelse ($campagnes as $campagne)
<h1 class="couleur">{{$campagne->nom}}</h1> 
@empty
    <p>Aucune campagne</p>
@endforelse

@foreach ($campagnes as $campagne)
    @if ($loop->first)
    <h1 class="couleur text-center">{{$campagne->nom}}</h1> 
    @endif

@endforeach
-->
<!-- Button trigger modal -->
        <div class="container-fluid">
            <div class="col-xl-2">

            </div>
            <div class="col-xl-8">

                <div class="card campagneContainer">
                    <div class="card-body campagneContainerInner">
                        <div class="row mb-4">
                            @foreach ($campagnes as $campagne)
                                @if ($loop->first)
                                    <h1 class="couleur text-center title">{{$campagne->nom}}</h1> 
                                    <h6 class="card-subtitle mt-2 text-muted text-center">personnalisation de la campagne</h6>
                                @endif

                            @endforeach
                        </div>
                           
                        <form class="marge" method="post" action="{{ route('elementscampagne.store') }}" enctype="multipart/form-data"> 

                            @csrf
                                <div class="row">
                                    <div class="col-xl-4">
                
                                    
                                    </div>
                                    <div class="col-xl-6 mb-2">
                                        <label for="inputnom"class="couleur">Quelles articles souhaitez vous inclure dans cette campagne?   
                                            <button type="button" class="myBtn hvr-grow ms-2" data-toggle="modal" data-target="#outside-modal-scrollable">
                                                <i class="fa-solid fa-plus"></i> Ajouter
                                            </button>
                                        </label>
                                      
                                    
                                        <select id="Select"  name="native-select" value="{{old('nom')}}" placeholder="articles" data-search="true" data-silent-initial-value-set="true" required>
                                            @foreach ($articles as $article)

                                                <option class="couleur"  value="{{$article->id}}">{{$article->nom}}</option>
                                                            
                                            @endforeach 
                                            
                                        </select>
                                      
                                       
                                        
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-xl-4">
                
                                
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label for="inputnom"class="couleur">Quelles seront les couleurs disponibles?
                                        <button type="button" class="myBtn hvr-grow ms-2" data-toggle="modal" data-target="#inside-modal-scrollable">
                                            <i class="fa-solid fa-plus"></i> Ajouter
                                        </button>
                                        </label>
                                        <select id="multipleSelect"multiple name="native_select1" placeholder="couleurs" data-search="true" data-silent-initial-value-set="true" value="{{old('nom')}}"required>
                                            @foreach ($couleurs as $couleur)
                                                    <option class="couleur"  value="{{$couleur->id}}">{{$couleur->nom}}</option>
                                                        
                                            @endforeach 
                                            
                                        </select>
                                      
                                        
                                    </div>
                                </div>
                                
                            

                                <div class="row">
                                    <div class="col-xl-4">
                                        
                                    </div>
                                
                                    
                                    <div class="col-xl-6 mb-2">
                                        <label for="inputnom"class="couleur">Selectionez les tailles disponibles
                                          
                                            <button type="button" class="myBtn hvr-grow ms-2" data-toggle="modal" data-target="#exampleModalCenter">
                                                <i class="fa-solid fa-plus"></i> Ajouter 
                                            </button>
                                          
                                        </label>
                                     
                                        <select id="multipleSelect"multiple name="native-select2" value="{{old('nom')}}" placeholder="tailles" data-search="true" data-silent-initial-value-set="true" required>
                                            @foreach ($tailles as $taille)
                                                <option class="couleur" name="nom" value="{{$taille->id}}">{{$taille->nom}}</option>
                                                    
                                            @endforeach 
                                            
                                        </select>
                                        
                                    
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-xl-4">

                                    </div>
                                    <div class="col-xl-4 text-center">
                                        <button type="submit" class="myBtn hvr-grow" onclick="getSelectedOptions()">Enregistrer</button>
                                    </div>
                                
                                </div>
                        </form> 
                        <p>
                            cliquez <a href="/campagne">ici</a>  pour terminer la personnalisation de campagne
                        </p>                
                    </div>
                </div>
                   
            </div> 

        </div>
   
        
         
<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"   aria-hidden="true">
        
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header couleur">
                    <h5 class="modal-title " id="exampleModalLongTitle"> 
                   Ajout D'une Taille
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="rouge1">&times;</span>
                    </button>
                </div>
                <form class="marge" method="post" action="{{ route('tailles.store') }}" enctype="multipart/form-data" >
                            @csrf
                        <div class="modal-body couleur">
 
                            <div class="form-group col-md-6 col-xl-6">
                                    <label for="inputnom" class="couleur">Entrez le nom de la taille</label>
                                    <input type="text" class="form-control  " id="inputnom" placeholder="nom de la taille" name="nom" value="{{old('nom')}}" required>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                            
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                
                        </div>  
                </form>
            </div>
        </div>
    </div>

            <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="outside-modal-scrollable" id="outside-modal-scrollable" aria-hidden="true">
        
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header couleur">
                            <h5 class="modal-title "> 
                            Modal title
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="marge" method="post" action="{{ route('articles.store') }}" enctype="multipart/form-data" >
                            @csrf
                                    <div class="modal-body couleur">

                                        <div class="form-group col-md-8">
                                            <label for="nom" class="couleur">Entrez le nom de l'article</label>
                                            <input type="text" class="form-control nom @error('nom') is-invalid @enderror" id="nom" placeholder="nom de l'article" name="nom" value="{{old('nom')}}" required>
                                            @error('nom')
                                                <span class="text-danger error-text">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="nom" class="couleur">entrez l'image</label>
                                            <input type="file"  id="image"  class="form-control image @error('image') is-invalid @enderror" name="image" value="{{old('image')}}" required>
                                            @error('image')
                                                <span class="text-danger error-text">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                
                            </div>
                            <script src="{{asset('js/jsvalidation.js')}}"></script>
                            {!! JsValidator::formRequest('App\Http\Requests\ArticleRequest')!!}
                            
                        </form>
                    </div>
                </div>
            </div>  
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="inside-modal-scrollable" id="inside-modal-scrollable" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header couleur">
                        <h5 class="modal-title "> 
                        Modal title
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="marge" method="post" action="{{ route('couleurs.store') }}" enctype="multipart/form-data" >
                        @csrf
                                <div class="modal-body couleur">

                                    <div class="form-group col-md-8">
                                        <label for="nom" class="couleur">Entrez la couleur de l'article</label>
                                        <input type="text" class="form-control nom @error('nom') is-invalid @enderror" id="nom" placeholder="couleur de l'article" name="nom" value="{{old('nom')}}" required>
                                        <div>
                                            <input type="color" id="head" name="hexcode"
                                                value="#e66465" required>
                                            <label for="head">hexacode</label>
                                        </div>
                                        @error('nom')
                                            <span class="text-danger error-text">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            
                        </div>
                        <script src="{{asset('js/jsvalidation.js')}}"></script>
                        {!! JsValidator::formRequest('App\Http\Requests\CouleurRequest')!!}
                        
                    </form>
                </div>
            </div>
        </div>  

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="{{asset('js/multiselect.js')}}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
        <script type="text/javascript"src="js/virtual-select.min.js"></script>

        <script type="text/javascript">
                VirtualSelect.init({ 
                ele: '#multipleSelect' ,
            
                
                });
        </script>

  
</body>
</html>
@endsection



