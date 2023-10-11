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


@section('contenu')<form class="marge" method="post" action="{{ route('employe.formAccidentTravailStore') }}" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label for="formGroupExampleInput">nom de l'employé</label>
        <input type="text" class="form-control nomEmploye @error('nomEmploye') is-invalid @enderror " id="formGroupExampleInput" placeholder="entrez le nom de l'employé" name="nomEmploye" value="{{old('nomEmploye')}}">
        @error('nomEmploye')
            <span class="text-danger error-text">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">fonction au moment de l'évènement</label>
        <input type="text" class="form-control fonctionMomentEvenement @error('fonctionMomentEvenement') is-invalid @enderror  " id="formGroupExampleInput" placeholder="" name="fonctionMomentEvenement" value="{{old('fonctionMomentEvenement')}}" >
        @error('fonctionMomentEvenement')
            <span class="text-danger error-text">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Matricule</label>
        <input type="text" class="form-control matriculeEmploye @error('matriculeEmploye') is-invalid @enderror " id="formGroupExampleInput" placeholder="" name="matriculeEmploye" value="{{old('matriculeEmploye')}}" >
        @error('matriculeEmploye')
            <span class="text-danger error-text">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group col-md-6">
            <label for="inputPassword4">Date de l'accident</label>
            <input type="date" class="form-control dateAccident @error('dateAccident') is-invalid @enderror " id="inputPassword4" placeholder="" name="dateAccident" value="{{old('dateAccident')}}" >
            @error('dateAccident')
            <span class="text-danger error-text">{{ $message }}</span>
            @enderror
      </div>
            <label for="inputPassword4">Heure accident</label>
            <input type="time" id="appt" class="form-control heureAccident @error('heureAccident') is-invalid @enderror " name="heureAccident">
            @error('heureAccident')
            <span class="text-danger error-text">{{ $message }}</span>
            @enderror
      <div class="form-check">
        <label for="temoins">Témoin(s)</label> 
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="{{old('flexRadioDefault')}}" >
        <label class="form-check-label" for="exampleCheck1">oui</label>
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="{{old('flexRadioDefault')}}" >
        <label class="form-check-label" for="exampleCheck1">non</label>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">nom des temoins </label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""name="nomsTemoins" value="{{old('nomsTemoins')}}" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">endroit de l'accident</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="endroitAccident" value="{{old('endroitAccident')}}" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">secteur d'activité</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="secteurActivite" value="{{old('secteurActivite')}}" >
      </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nature et site de la blessure(cochez s'il y'a lieu côté gauche ou droit)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="tête,visage,nez,yeux,oreilles"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckDefault">
                        tête,visage,nez,yeux,oreilles
                        </label>
                        <input class="form-check-input" type="checkbox" value=" D" name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckDefault">
                        D/
                        </label>
                        <input class="form-check-input" type="checkbox" value="G"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckDefault">
                        G
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Torse" name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Torse
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value=" Poumons"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Poumons
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value=" Bras,épaules,coudes"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Bras,épaules,coudes
                        </label>
                        <input class="form-check-input" type="checkbox" value="D"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckDefault">
                        D/
                        </label>
                        <input class="form-check-input" type="checkbox" value="G"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckDefault">
                        G
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Poignets,mains,doigts"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Poignets,mains,doigts
                        </label>
                        <input class="form-check-input" type="checkbox" value=" D"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckDefault">
                        D/
                        </label>
                        <input class="form-check-input" type="checkbox" value="G"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckDefault">
                        G
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Dos" name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Dos
                        </label>
                        <input class="form-check-input" type="checkbox" value="haut" name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckDefault">
                        haut/
                        </label>
                        <input class="form-check-input" type="checkbox" value="bas"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckDefault">
                        bas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Hanche"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Hanche
                        </label>
                        <input class="form-check-input" type="checkbox" value="D"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckDefault">
                        D/
                        </label>
                        <input class="form-check-input" type="checkbox" value="G"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckDefault">
                        G
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Jambe,genou"name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Jambe,genou
                        </label>
                        <input class="form-check-input" type="checkbox" value="D" name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}">
                        <label class="form-check-label" for="flexCheckDefault">
                        D/
                        </label>
                        <input class="form-check-input" type="checkbox" value="G" name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckDefault">
                        G
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value=" Pied,Orteil,Cheville"  name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Pied,Orteil,Cheville
                        </label>
                        <input class="form-check-input" type="checkbox" value="D" name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}">
                        <label class="form-check-label" for="flexCheckDefault">
                        D/
                        </label>
                        <input class="form-check-input" type="checkbox" value="G" id="flexCheckDefault" name="natureSiteBlessure[]" value="{{old('natureSiteBlessure[]')}}">
                        <label class="form-check-label" for="flexCheckDefault">
                        G
                        </label>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Description de la blessure(à cocher)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Brûlure,engelure" id="flexCheckChecked"name="descriptionBlessure[]" value="{{old('descriptionBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Brûlure,engelure
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Comotion cérébrale" id="flexCheckChecked" name="descriptionBlessure[]" value="{{old('descriptionBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                       Comotion cérébrale
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Corps étranger" id="flexCheckChecked" name="descriptionBlessure[]" value="{{old('descriptionBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Corps étranger
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Coupure,lacération,déchirure" id="flexCheckChecked" name="descriptionBlessure[]" value="{{old('descriptionBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Coupure,lacération,déchirure
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Douleur au dos" id="flexCheckChecked" name="descriptionBlessure[]" value="{{old('descriptionBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Douleur au dos
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="égratinure,éraflure,piqure,écharde" id="flexCheckChecked" name="descriptionBlessure[]" value="{{old('descriptionBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        égratinure,éraflure,piqure,écharde
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Entorse,élongation,contusion,foulure,luxation" id="flexCheckChecked" name="descriptionBlessure[]" value="{{old('descriptionBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Entorse,élongation,contusion,foulure,luxation
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Fracture,amputation" id="flexCheckChecked" name="descriptionBlessure[]" value="{{old('descriptionBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                       Fracture,amputation
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Irritation,infection" id="flexCheckChecked" name="descriptionBlessure[]" value="{{old('descriptionBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                       Irritation,infection
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Inhalation" id="flexCheckChecked" name="descriptionBlessure[]" value="{{old('descriptionBlessure[]')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                        Inhalation
                        </label>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                        <label class="form-check-label" for="flexCheckChecked">
                      Autres
                        </label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="descriptionBlessure[]" value="{{old('descriptionBlessure[]')}}" >
                    </div>
                </div>  
            </div>  
                    <div class="form-group">
                        <label for="formGroupExampleInput">Violence(à cocher)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="physique" id="flexCheckChecked" name="violence" value="{{old('violence')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                      Physique
                        </label>
                        <input class="form-check-input" type="checkbox" value="Verbale" id="flexCheckChecked" name="violence" value="{{old('violence')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                      Verbale
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Décrivez la tâche éffectuée et comment s'est produit la blessure</label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="descriptionDeroulementBlessure" value="{{old('descriptionDeroulementBlessure')}}"  ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">premiers Soins</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="premiersSoins" value="{{old('premiersSoins')}}" >
                        <label for="formGroupExampleInput">nom du secouriste</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nomSecouriste" value="{{old('nomSecouriste')}}" >
                    </div>
                    <div class="form-group">
                       <h3 class="text-center">détail sur la durée de l'absence</h3>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Accident ne nécessitant aucune absence"  id="flexRadioDefault1" name="necessiteAccident" value="{{old('necessiteAccident')}}"  >
                        <label class="form-check-label" for="exampleCheck1">Accident ne nécessitant aucune absence </label>
                        <input class="form-check-input" type="radio" value="Accident nécessitant une consultation médicale"  id="flexRadioDefault1 " name="necessiteAccident" value="{{old('necessiteAccident')}}" >
                        <label class="form-check-label" for="exampleCheck1">Accident nécessitant une consultation médicale</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="J'ai avisé mon supérieur immédiat de mon absence" id="flexCheckChecked" name="supAvise" value="{{old('supAvise')}}" >
                        <label class="form-check-label" for="flexCheckChecked">
                      J'ai avisé mon supérieur immédiat de mon absence 
                        </label>
                        <br></br>
                        <label for="formGroupExampleInput">nom en lettres moulées du supérieur</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""name="nomSuperviseurAvise" value="{{old('nomSuperviseurAvise')}}" >
                        <label for="inputPassword4">Date </label>
                        <input type="date" class="form-control " id="inputPassword4" placeholder="" name="dateSuperviseurAvise" value="{{old('dateSuperviseurAvise')}}" >
                    </div>
                    <div class="form-check">
                        <label for="formGroupExampleInput">signature du supérieur immédiat</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="signatureSupImmediat" value="{{old('signatureSupImmediat')}}" >
                        <label for="formGroupExampleInput">no de poste</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="numPosteSupImmediat" value="{{old('numPosteSupImmediat')}}" >
                        <label for="inputPassword4">Date </label>
                        <input type="date" class="form-control " id="inputPassword4" placeholder="" name="dateSignatureSupImmediat" value="{{old('dateSignatureSupImmediat')}}" >
                    </div>
                    <div class="form-check">
                    <label for="formGroupExampleInput">signature du travailleur ou de la travailleuse</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="signatureEmploye" value="{{old('signatureEmploye')}}" >
                        <label for="formGroupExampleInput">no de poste</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="numPosteEmploye" value="{{old('numPosteEmploye')}}" >
                        <label for="inputPassword4">Date </label>
                        <input type="date" class="form-control " id="inputPassword4" placeholder="" name="dateSignatureEmploye" value="{{old('dateSignatureEmploye')}}" >
                    </div>
    
        </div>
    
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
    
    



@endsection
<script src="js/employe/accueil.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>