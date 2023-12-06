<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/employe/accueil.css')}}">
    <link rel="icon" href="https://tse1.mm.bing.net/th?id=OIP.BvE9Kz_K4pOY9ceOf4bLIQHaEK&pid=Api" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
    <title> formulaire d'accident de travail </title>
</head>
<body>
@extends('layouts.app')


@section('contenu')
    <form class="marge" method="post" action="{{ route('superviseur.formAuditSSTStore') }}" enctype="multipart/form-data">
    @csrf
        <div class="text-center">
         <h3 >Nom du Département</h3>
        <h5>Grille audit SST - formulaire simplifié</h5>    
        </div>
       
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-1">

                </div>
                

            </div>
            <div class="row">
                <div class="col-xl-1">

                </div>
                <div class="col-xl-4">
                    <label for="formGroupExampleInput">Lieu(x) des traveaux:</label>
                    <input type="text" class="form-control lieuTravail @error('lieuTravail') is-invalid @enderror " id="formGroupExampleInput"  name="lieuTravail" value="{{old('lieuTravail')}}">
                    @error('lieuTravail')
                      <span class="text-danger error-text">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-xl-1">
                </div>
                <div class="col-xl-4">
                    <label for="inputPassword4">Date</label>
                    <input type="date" class="form-control date @error('date') is-invalid @enderror " id="inputPassword4" placeholder="" name="date" value="{{old('date')}}" >
                    @error('date')
                    <span class="text-danger error-text">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <table class="table">
                <thead>

                    <tr>
                        <th scope="col"></th>
                        <td scope="col" >
                                <label for="inputPassword4">Heure </label>
                                <input type="time" id="appt" class="form-control heure @error('heure') is-invalid @enderror " name="heure">
                                @error('heureAccident')
                                <span class="text-danger error-text">{{ $message }}</span>
                                @enderror
                        </td>
                        <th scope="col">Conforme</th>
                        <th scope="col">Non conforme</th>
                        <th scope="col">N/A</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td>Epi</td>
                       
                        <td>
                            <div class="form-check">
                                <input class="form-check-input Epi @error('Epi') is-invalid @enderror" type="radio" value="conforme" name="Epi" value="{{old('Epi')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input Epi @error('Epi') is-invalid @enderror" type="radio" value=" non conforme" name="Epi" value="{{old('Epi')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input Epi @error('Epi') is-invalid @enderror" type="radio" value="N/A" name="Epi" value="{{old('Epi')}}" >
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>tenue des lieux</td>
                      
                        <td>
                            <div class="form-check">
                                <input class="form-check-input tenueLieux @error('tenueLieux') is-invalid @enderror" type="radio" value="conforme" name="tenueLieux" value="{{old('tenueLieux')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input tenueLieux @error('tenueLieux') is-invalid @enderror" type="radio" value=" non conforme" name="tenueLieux" value="{{old('tenueLieux')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input tenueLieux @error('tenueLieux') is-invalid @enderror" type="radio" value="N/A" name="tenueLieux" value="{{old('tenueLieux')}}" >
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Comportement sécuritaire</td>
                    
                        <td>
                            <div class="form-check">
                                <input class="form-check-input comportementSecuritaire @error('comportementSecuritaire') is-invalid @enderror" type="radio" value="conforme" name="comportementSecuritaire" value="{{old('comportementSecuritaire')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input comportementSecuritaire @error('comportementSecuritaire') is-invalid @enderror" type="radio" value=" non conforme" name="comportementSecuritaire" value="{{old('comportementSecuritaire')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input comportementSecuritaire @error('comportementSecuritaire') is-invalid @enderror" type="radio" value="N/A" name="comportementSecuritaire" value="{{old('comportementSecuritaire')}}" >
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Signalisation</td>
                       
                        <td>
                            <div class="form-check">
                                <input class="form-check-input signalisation @error ('signalisation') is-invalid @enderror" type="radio" value="conforme" name="signalisation" value="{{old('signalisation')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input signalisation @error ('signalisation') is-invalid @enderror" type="radio" value=" non conforme" name="signalisation" value="{{old('natureSiteBlessure[]')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input signalisation @error ('signalisation') is-invalid @enderror" type="radio" value="N/A" name="signalisation" value="{{old('signalisation')}}" >
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Fiches Signalétiques</td>
                    
                        <td>
                            <div class="form-check">
                                <input class="form-check-input fichesSignaletiques @error ('fichesSignaletiques') is-invalid @enderror" type="radio" value="conforme" name="fichesSignaletiques" value="{{old('fichesSignaletiques')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input fichesSignaletiques @error ('fichesSignaletiques') is-invalid @enderror" type="radio" value="non conforme" name="fichesSignaletiques" value="{{old('fichesSignaletiques')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input fichesSignaletiques @error ('fichesSignaletiques') is-invalid @enderror" type="radio" value="N/A" name="fichesSignaletiques" value="{{old('fichesSignaletiques')}}" >
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Travaux-Excavation</td>
                       
                        <td>
                            <div class="form-check">
                                <input class="form-check-input travauxEscavation @error ('travauxEscavation') is-invalid @enderror" type="radio" value="conforme" name="travauxEscavation" value="{{old('travauxEscavation')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input travauxEscavation @error ('travauxEscavation') is-invalid @enderror " type="radio" value="non conforme" name="travauxEscavation" value="{{old('travauxEscavation')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input travauxEscavation @error ('travauxEscavation') is-invalid @enderror " type="radio" value="N/A" name="travauxEscavation" value="{{old('travauxEscavation')}}" >
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Espace clos</td>
                       
                        <td>
                            <div class="form-check">
                                <input class="form-check-input espaceClos @error ('espaceClos') is-invalid @enderror" type="radio" value="Conforme" name="espaceClos" value="{{old('espaceClos')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input espaceClos @error ('espaceClos') is-invalid @enderror" type="radio" value="non conforme" name="espaceClos" value="{{old('espaceClos')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input espaceClos @error ('espaceClos') is-invalid @enderror" type="radio" value="N/A" name="espaceClos" value="{{old('espaceClos')}}" >
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Methode de travail</td>
                      
                        <td>
                            <div class="form-check">
                                <input class="form-check-input methodeTravail @error ('methodeTravail') is-invalid @enderror" type="radio" value="conforme" name="methodeTravail" value="{{old('methodeTravail')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input methodeTravail @error ('methodeTravail') is-invalid @enderror" type="radio" value="non conforme" name="methodeTravail" value="{{old('methodeTravail')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input methodeTravail @error ('methodeTravail') is-invalid @enderror" type="radio" value="N/A" name="methodeTravail" value="{{old('methodeTravail')}}" >
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Autre(s): Travaux en hauteur
                        <input type="text" class="form-control" id="formGroupExampleInput"  name="autre" value="{{old('autre')}}">
                        </td>
                      

                        <td>
                            <div class="form-check">
                                <input class="form-check-input autre @error ('autre') is-invalid @enderror" type="radio" value="conforme" name="autre" value="{{old('autre')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input autre @error ('autre') is-invalid @enderror" type="radio" value="non conforme" name="autre" value="{{old('autre')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input autre @error ('autre') is-invalid @enderror" type="radio" value="N/A" name="autre" value="{{old('autre')}}" >
                            </div>
                        </td>
                    </tr>
                    <tr >
                        <th scope="row"></th>
                        <td></td>
                        <td class="text-center">COVID-19</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Respect de la distanciation </td>
                      
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input respectDistanciation @error ('respectDistanciation') is-invalid @enderror" type="radio" value="conforme" name="respectDistanciation" value="{{old('respectDistanciation')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input respectDistanciation @error ('respectDistanciation') is-invalid @enderror" type="radio" value="non conforme" name="respectDistanciation" value="{{old('respectDistanciation')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input respectDistanciation @error ('respectDistanciation') is-invalid @enderror" type="radio" value="N/A" name="respectDistanciation" value="{{old('respectDistanciation')}}" >
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Port des EPI(Masque/visiere)</td>
                    
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input portEpi @error ('portEpi') is-invalid @enderror" type="radio" value="conforme" name="portEpi" value="{{old('portEpi')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input portEpi @error ('portEpi') is-invalid @enderror" type="radio" value="non conforme" name="portEpi" value="{{old('portEpi')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input portEpi @error ('portEpi') is-invalid @enderror" type="radio" value="N/A" name="portEpi" value="{{old('portEpi')}}" >
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Respect des procédures établies</td>
                     
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input respectProcedures @error ('respectProcedures') is-invalid @enderror" type="radio" value="conforme" name="respectProcedures" value="{{old('respectProcedures')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input respectProcedures @error ('respectProcedures') is-invalid @enderror " type="radio" value="non conforme" name="respectProcedures" value="{{old('respectProcedures')}}" >
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input respectProcedures @error ('respectProcedures') is-invalid @enderror" type="radio" value="N/A" name="respectProcedures" value="{{old('respectProcedures')}}" >
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description du travail en hauteur</label>
                    <textarea class="form-control descriptionTravailHauteur @error ('descriptionTravailHauteur') is-invalid @enderror" name="descriptionTravailHauteur" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('descriptionTravailHauteur')
                            <span class="text-danger error-text">{{ $message }}</span>
                    @enderror 
                </div>
                        
                <button type="submit" class="btn btn-primary">Submit</button>
                      
    </form>
@endsection

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>