@extends('layouts.app')
@section('content')
    <div class="container-fluid campagneContainer">
        <div class="row campagneTitle">
            <h1>Campagnes</h1>
        </div>
    <h3 class="couleur" >Historique des campagnes</h3>
        <div class="row">
      
            <div class="col-xl-7 campHistory">
   
                    
                    @foreach ($campagnes as $campagne)
                    <ul>
                        <div class="camp hvr-grow-small">
                        <a href="{{ route('detailsCampagne', [$campagne]) }}">   <h4 class="couleur">{{$campagne->nom}}</h4> </a>
                            <h4 class="couleur contentEnd">{{$campagne->statut}}</h4>
                        </div>
                    </ul>
                    @endforeach
            </div>
            <div class="col-xl-5">
                <h3 class="couleur contentEndText">Creation de campagne</h3>
                @if(count($campagnes1))
            
                <button class="btn btn-primary invisible" type="button " data-bs-toggle="modal" data-bs-target="#inside-modal-scrollable">Ajouter</button >
                @else
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#inside-modal-scrollable">Ajouter</button >
                @endif
            </div>
        </div>
    </div>

 <!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="inside-modal-scrollable" id="inside-modal-scrollable" title="Inside modal scrollable ":scrollable="true" aria-hiden="true">
 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header couleur">
          <h5 class="modal-title "> 
            Modal title
          </h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="marge" method="post" action="{{ route('campagnes.store') }}" enctype="multipart/form-data" >
           @csrf
            <div class="modal-body couleur">
                
                       
                            <div class="form-group col-md-6">
                                <label for="inputnom" class="couleur">nom de la campagne</label>
                                <input type="text" class="form-control nom @error('nom') is-invalid @enderror" id="inputnom" placeholder="nom" name="nom" value="{{old('nom')}}">
                                @error('nom')
                                    <span class="text-danger error-text">{{ $message }}</span>
                                @enderror
                            </div>

                        <div class="form-row">
                        
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="couleur">Date de Debut</label>
                                <input type="date" class="form-control dateDebut @error('dateDebut') is-invalid @enderror" id="inputPassword4" placeholder="debut" name="dateDebut" value="{{old('dateDebut')}}">
                                
                                @error('dateDebut')
                                    <span class="text-danger error-text">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group col-md-8 ">
                            <label for="inputPassword4" class="couleur">Quand Souhaitez vous débuter le sondage?</label>
                            <input type="date" class="form-control debutSondage @error('debutSondage') is-invalid @enderror" id="inputPassword4" placeholder="debut du Sondage" name="debutSondage" value="{{old('debutSondage')}}">
                            @error('debutSondage')
                                    <span class="text-danger error-text">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4" class="couleur">Quand Souhaitez vous mettre fin au Sondage?</label>
                            <input type="date" class="form-control finSondage @error('finSondage') is-invalid @enderror" id="inputPassword4" placeholder="Fin du Sondage" name="finSondage" value="{{old('finSondage')}}">
                            @error('finSondage')
                                    <span class="text-danger error-text">{{ $message }}</span>
                            @enderror
                        </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                
           </div>

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                <script src="{{asset('js/jsvalidation.js')}}"></script>
                
              
                {!! JsValidator::formRequest('App\Http\Requests\CampagneRequest')!!} 
        </form>
    </div>
  </div>
</div>
@endsection










