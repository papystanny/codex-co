@extends('layouts.app')


@section('content')
<form class="marge" method="post" action="{{ route('employe.formAccidentTravailStore') }}" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="formGroupExampleInput">nom de l'employé</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="entrez le nom de l'employé" name="nomEmploye">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">fonction au moment de l'évènement</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="fonctionMomentEvenement">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Matricule</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="matriculeEmploye">
  </div>
  <div class="form-group col-md-6">
        <label for="inputPassword4">Date de l'accident</label>
        <input type="date" class="form-control " id="inputPassword4" placeholder="" name="dateAccident" >

  </div>
        <label for="inputPassword4">Heure accident</label>
        <input type="time" id="appt" name="heureAccident">
  <div class="form-check">
    <label for="temoins">Témoin(s)</label> 
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="exampleCheck1">oui</label>
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="exampleCheck1">non</label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">nom des temoins </label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""name="nomsTemoins">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">endroit de l'accident</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="endroitAccident">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">secteur d'activité</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="secteurActivite">
  </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nature et site de la blessure(cochez s'il y'a lieu côté gauche ou droit)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="natureSiteBlessure1">
                    <label class="form-check-label" for="flexCheckDefault">
                    tête,visage,nez,yeux,oreilles
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="natureSiteBlessure2">
                    <label class="form-check-label" for="flexCheckDefault">
                    D/
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="natureSiteBlessure3">
                    <label class="form-check-label" for="flexCheckDefault">
                    G
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="natureSiteBlessure4">
                    <label class="form-check-label" for="flexCheckChecked">
                    Torse
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="natureSiteBlessure5">
                    <label class="form-check-label" for="flexCheckChecked">
                    Poumons
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked " name="natureSiteBlessure6">
                    <label class="form-check-label" for="flexCheckChecked">
                    Bras,épaules,coudes
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="natureSiteBlessure7">
                    <label class="form-check-label" for="flexCheckDefault">
                    D/
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="natureSiteBlessure8">
                    <label class="form-check-label" for="flexCheckDefault">
                    G
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="natureSiteBlessure9">
                    <label class="form-check-label" for="flexCheckChecked">
                    Poignets,mains,doigts
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="natureSiteBlessure10">
                    <label class="form-check-label" for="flexCheckDefault">
                    D/
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="natureSiteBlessure11">
                    <label class="form-check-label" for="flexCheckDefault">
                    G
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"name="natureSiteBlessure12">
                    <label class="form-check-label" for="flexCheckChecked">
                    Dos
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"name="natureSiteBlessure13">
                    <label class="form-check-label" for="flexCheckDefault">
                    haut/
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="natureSiteBlessure14">
                    <label class="form-check-label" for="flexCheckDefault">
                    bas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="natureSiteBlessure15">
                    <label class="form-check-label" for="flexCheckChecked">
                    Hanche
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="natureSiteBlessure16">
                    <label class="form-check-label" for="flexCheckDefault">
                    D/
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="natureSiteBlessure17">
                    <label class="form-check-label" for="flexCheckDefault">
                    G
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"name="natureSiteBlessure18">
                    <label class="form-check-label" for="flexCheckChecked">
                    Jambe,genou
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"name="natureSiteBlessure19">
                    <label class="form-check-label" for="flexCheckDefault">
                    D/
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"name="natureSiteBlessure20">
                    <label class="form-check-label" for="flexCheckDefault">
                    G
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="natureSiteBlessure21">
                    <label class="form-check-label" for="flexCheckChecked">
                    Pied,Orteil,Cheville
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"name="natureSiteBlessure22">
                    <label class="form-check-label" for="flexCheckDefault">
                    D/
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="natureSiteBlessure23">
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
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"name="descriptionBlessure1">
                    <label class="form-check-label" for="flexCheckChecked">
                    Brûlure,engelure
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="descriptionBlessure2">
                    <label class="form-check-label" for="flexCheckChecked">
                   Comotion cérébrale
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="descriptionBlessure3">
                    <label class="form-check-label" for="flexCheckChecked">
                    Corps étranger
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="descriptionBlessure4">
                    <label class="form-check-label" for="flexCheckChecked">
                    Coupure,lacération,déchirure
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="descriptionBlessure5">
                    <label class="form-check-label" for="flexCheckChecked">
                    Douleur au dos
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="descriptionBlessure6">
                    <label class="form-check-label" for="flexCheckChecked">
                    égratinure,éraflure,piqure,écharde
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="descriptionBlessure7">
                    <label class="form-check-label" for="flexCheckChecked">
                    Entorse,élongation,contusion,foulure,luxation
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="descriptionBlessure8">
                    <label class="form-check-label" for="flexCheckChecked">
                   Fracture,amputation
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="descriptionBlessure9">
                    <label class="form-check-label" for="flexCheckChecked">
                   Irritation,infection
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="descriptionBlessure10">
                    <label class="form-check-label" for="flexCheckChecked">
                    Inhalation
                    </label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="descriptionBlessure11">
                    <label class="form-check-label" for="flexCheckChecked">
                  Autres
                    </label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="descriptionBlessure12">
                </div>
            </div>  
        </div>  
                <div class="form-group">
                    <label for="formGroupExampleInput">Violence(à cocher)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="violence1">
                    <label class="form-check-label" for="flexCheckChecked">
                  Physique
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="violence2">
                    <label class="form-check-label" for="flexCheckChecked">
                  Verbale
                    </label>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Décrivez la tâche éffectuée et comment s'est produit la blessure</label>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="descriptionDeroulementBlessure"></textarea>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">premiers Soins</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="premiersSoins">
                    <label for="formGroupExampleInput">nom du secouriste</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nomSecouriste">
                </div>
                <div class="form-group">
                   <h3 class="text-center">détail sur la durée de l'absence</h3>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" name="necessiteAccident1">
                    <label class="form-check-label" for="exampleCheck1">Accident ne nécessitant aucune absence </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1 " name="necessiteAccident2">
                    <label class="form-check-label" for="exampleCheck1">Accident nécessitant une consultation médicale</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="supAvise">
                    <label class="form-check-label" for="flexCheckChecked">
                  J'ai avisé mon supérieur immédiat de mon absence 
                    </label>
                    <br></br>
                    <label for="formGroupExampleInput">nom en lettres moulées du supérieur</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""name="nomSuperviseurAvise">
                    <label for="inputPassword4">Date </label>
                    <input type="date" class="form-control " id="inputPassword4" placeholder="" name="dateSuperviseurAvise" >
                </div>
                <div class="form-check">
                    <label for="formGroupExampleInput">signature du supérieur immédiat</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""name="signatureSupImmediat">
                    <label for="formGroupExampleInput">no de poste</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="numPosteSupImmediat">
                    <label for="inputPassword4">Date </label>
                    <input type="date" class="form-control " id="inputPassword4" placeholder="" name="dateSignatureSupImmediat" >
                </div>
                <div class="form-check">
                <label for="formGroupExampleInput">signature du travailleur ou de la travailleuse</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="signatureEmploye">
                    <label for="formGroupExampleInput">no de poste</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="numPosteEmploye">
                    <label for="inputPassword4">Date </label>
                    <input type="date" class="form-control " id="inputPassword4" placeholder="" name="dateSignatureEmploye" >
                </div>

    </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>    



@endsection