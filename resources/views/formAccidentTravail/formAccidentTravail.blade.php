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
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">oui</label>
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">non</label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">nom des temoins </label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>    
</div>
@endsection