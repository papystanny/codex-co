@extends('layouts.app')


@section('content')
<div class='container-fluid'>
<form>
<div class="form-group">
    <label for="formGroupExampleInput">nom de l'employé</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="entrez le nom de l'employé">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">fonction au moment de l'évènement</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Matricule</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="form-group col-md-6">
        <label for="inputPassword4">Date de l'accident</label>
        <input type="date" class="form-control " id="inputPassword4" placeholder="" name="dateDebut" >
  </div>
  <div class="form-check">
  <label for="temoins">Témoin(s)</label> 

   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="exampleCheck1">oui</label>
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="exampleCheck1">non</label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">nom des temoins </label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">endroit de l'accident</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">secteur d'activité</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Nature et site de la blessure(cochez s'il y'a lieu côté gauche ou droit)</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
       tête,visage,nez,yeux,oreilles
    </label>
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      D/
    </label>
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
     G
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">
       Torse
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">
       Poumons
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">
       Bras,épaules,coudes
    </label>
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      D/
    </label>
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
     G
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">
    Poignets,mains,doigts
    </label>
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      D/
    </label>
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
     G
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">
       Dos
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">
        Checked checkbox
    </label>
  </div>



 
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>    
</div>


@endsection