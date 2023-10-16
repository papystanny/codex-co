@extends('layouts.app')


@section('content')
    <form class="marge" method="post" action="{{ route('superviseur.formAuditSSTStore') }}" enctype="multipart/form-data">
    @csrf
        <h3>Nom du Département</h3>
        <h5>Grille audit SST - formulaire simplifié</h5>
        
        <div class="mb-3">
            <label for="formGroupExampleInput">nom de l'employé</label>
            <input type="text" class="form-control nomEmploye @error('nomEmploye') is-invalid @enderror " id="formGroupExampleInput" placeholder="entrez le nom de l'employé" name="nomEmploye" value="{{old('nomEmploye')}}">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput">Lieu(x) des traveaux:</label>
            <input type="text" class="form-control lieuTravail @error('lieuTravail') is-invalid @enderror " id="formGroupExampleInput"  name="lieuTravail" value="{{old('lieuTravail')}}">
        </div>
        <div class="mb-3">
            <label for="inputPassword4">Date</label>
            <input type="date" class="form-control dateAccident @error('dateAccident') is-invalid @enderror " id="inputPassword4" placeholder="" name="dateAccident" value="{{old('dateAccident')}}" >
            @error('dateAccident')
            <span class="text-danger error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputPassword4">Heure accident</label>
            <input type="time" id="appt" class="form-control heureAccident @error('heureAccident') is-invalid @enderror " name="heureAccident">
            @error('heureAccident')
            <span class="text-danger error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2">

                </div>
                <div class="col-xl-4">
                            

                </div>
            </div>
            
        </div>
    </form>
@endsection