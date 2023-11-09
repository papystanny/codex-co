@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="campagneZoom container-fluid">
        <h1 class="text-center titleCamp">Détails de la campagne: {{ $campagne->nom }}</h1>
        @if (isset($campagne))
            <div class="container-fluid">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">nom</th>
                                <th scope="col">date début campagne</th>
                                <th scope="col">date fin campagne</th>
                                <th scope="col">date début Sondage</th>
                                <th scope="col">date Fin Sondage</th>
                                <th scope="col">statut</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        {{ $campagne->nom }}
                                    </td>
                                    <td>
                                        {{ $campagne->dateDebut }}
                                    </td>
                                    <td> 
                                        {{ $campagne->dateFin }}
                                    </td>
                                    <td> 
                                        {{ $campagne->debutSondage }}
                                    </td>
                                  
                                    <td> 
                                        {{ $campagne->finSondage }}
                                    </td>
                                    <td> 
                                        {{ $campagne->statut }}

                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('campagnes.supprimer',[$campagne->id]) }}">
                                            @csrf 
                                            @method('DELETE')
                                            <button type="submit" title="Supprimer la campagne" class="btn btnDel btnCamp btn-primary" >
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        @if($campagne->statut === 'termine')
                                            <form action="{{ route('campagnes.terminer',[$campagne->id]) }}">
                                                <button type="submit" title="Terminer la campagne" class="btn btnCamp btn-primary invisible"  >
                                                    <i class="fa-solid fa-check"></i>
                                                </button>
                                            </form>
                                        @else
                                            <form action="{{ route('campagnes.terminer',[$campagne->id]) }}">
                                                <button type="submit" title="Terminer la campagne" class="btn btnCamp btn-primary" >
                                                    <i class="fa-solid fa-check"></i>
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                           
                </div>
            </div>
        @endif
        <h2 class="pt-3">Articles présents dans cette campagne</h2>
        <div class="container-fluid">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>   
                            <th scope="col">noms</th>
                            <th scope="col">couleurs</th>
                            <th scope="col">tailles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                @foreach($campagne->articles as $article) 
                                    <tr>
                                        <td class="myNameCamp">
                                            {{ $article->nom }}
                                        </td>
                                        <td class="mySlidesCamp"> 
                                            @foreach ($article->couleurs as $couleur)
                                                <div class="articleColor" title="{{ $couleur->nom }}" style="background-color: {{ $couleur->hexcode }}" name="couleur"></div >
                                            @endforeach
                                        </td>
                                        <td class="mySizesCamp">  
                                            @foreach($article->tailles as $taille)
                                                {{ $taille->nom }} &#8203 &#8203
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach 
                            </td>
                            <td>
                                <form method="post" action="{{ route('admin.modifiersondage',[$campagne]) }}">
                                    @csrf
                                    @if(($campagne->statut === 'termine'))
                                        <button type="submit" title="Modifier le sondage" class="btn btnCamp btn-primary invisible" style="margin:  10px 0 0 10px">
                                            <i class="fa-solid fa-edit"></i>
                                        </button>
                                    @else
                                    <button type="submit" title="Ajouter un article" class="btn btnCamp btn-primary" style="margin:  10px 0 0 10px">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    @endif   
                                </form> 
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>

        <h2 class="pt-3">Commandes reliées à la campagne</h2>
        <div class="container-fluid">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>       
                            <th scope="col">Usagers</th>
                            <th scope="col">Articles</th>
                            <th scope="col">Tailles</th>
                            <th scope="col">Couleur</th>
                            <th scope="col">Statut</th>
                         
                       <!--     <form method="post" action="{{ route('admin.modifiersondage',[$campagne]) }}">
                                    @csrf
                                    @if(($campagne->statut === 'termine'))
                                        <button type="submit" title="Modifier le sondage" class="btn btnCamp btn-primary invisible" style="margin:  10px 0 0 10px">
                                            <i class="fa-solid fa-edit"></i>
                                        </button>
                                    @else
                                    <button type="submit" title="Ajouter un article" class="btn btnCamp btn-primary" style="margin:  10px 0 0 10px">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    @endif   
                            </form> -->
                            </th>
                            <th scope="col">État</th>
                            <th scope="col">mise à jour statut</th>
                            <th scope="col">mise à jour Etat</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach($commandes1 as $commande1)
                                @foreach($commandes as $commande)
                                    <tr>
                                        <td> {{ $commande1->nom }} </td>
                                        <td> {{ $commande->nom_article}} </td> 
                                        <td> {{ $commande->taille_article}}</td>
                                        <td> {{ $commande->couleur_article}}</td>  
                                        <td> {{ $commande->statut}}</td>
                                        <td> {{ $commande->etat}}</td>
                                        <td> 
                                            <form method="post" action="{{ route('commandes.update',[$commande->id]) }}">
                                                @csrf
                                                <button type="submit" title="Modifier le statut" class="btn btnCamp btn-primary" style="margin:  0px 5px 5px 0px">
                                                    payé
                                                </button>
                                            </form>
                                        </td>
                                        <td> 
                                            <form method="post" action="{{ route('commandes.updateEtat',[$commande->id]) }}">
                                                @csrf
                                                <button type="submit" title="Modifier l'etat" class="btn btnCamp btn-primary" style="margin:  0px 0 0 0px">
                                                    reçu
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach 
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>   
</body>
</html>
@endsection