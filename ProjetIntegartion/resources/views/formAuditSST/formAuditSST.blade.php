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
                        @error('Epi')
                            <span class="text-danger error-text">{{ $message }}</span>
                        @enderror 
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
                        @error('tenueLieux')
                            <span class="text-danger error-text">{{ $message }}</span>
                        @enderror 
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
                        @error('comportementSecuritaire')
                            <span class="text-danger error-text">{{ $message }}</span>
                        @enderror 
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
                        @error('signalisation')
                            <span class="text-danger error-text">{{ $message }}</span>
                        @enderror 
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
                        @error('fichesSignaletiques')
                            <span class="text-danger error-text">{{ $message }}</span>
                        @enderror 
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
                        @error('travauxEscavation')
                            <span class="text-danger error-text">{{ $message }}</span>
                        @enderror 
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
                        @error('espaceClos')
                            <span class="text-danger error-text">{{ $message }}</span>
                        @enderror 
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
                        @error('methodeTravail')
                            <span class="text-danger error-text">{{ $message }}</span>
                        @enderror 
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
                        @error('autre')
                            <span class="text-danger error-text">{{ $message }}</span>
                        @enderror 

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
                        @error('respectDistanciation')
                            <span class="text-danger error-text">{{ $message }}</span>
                        @enderror 
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
                        @error('portEpi')
                            <span class="text-danger error-text">{{ $message }}</span>
                        @enderror 
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
                        @error('respectProcedures')
                            <span class="text-danger error-text">{{ $message }}</span>
                        @enderror 
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