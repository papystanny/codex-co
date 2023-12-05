<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/228206c737.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Formulaire Mécanique</title>
</head>
<body>
    @extends('layouts.app')
    
    @section('contenu')
    @if(isset($formecanique))
    <section class="main-container">
        <!-- <div class="video">
            <iframe src="{{$film->preview}}" width="920" height="415"></iframe>
        </div> -->

        <div class="detail-container-center">
            <div class="detail-container-wrapper">
                <div class="detail-container">
                    <div class="detail-container-left">
                        <div class="film-name">
                            <div class="zoomDetails">
                                <div class="numUniteImplique">{{$formecanique->numUniteImplique}}</div>
                                <div class="departement"  style="margin-left: 1rem;">{{$formecanique->departement}}</div>
                                <div class="departement"  style="margin-left: 1rem;">{{$formecanique->notifSup}}</div>
                                <div class="departement"  style="margin-left: 1rem;">{{$formecanique->notifAdmin}}</div>

                            </div>
                            <div class="zoomNom">
                                {{$formecanique->prenomNomEmploye}}
                            </div>
                        </div>
                        <div class="zoomprenomNomSupImmediat">
                            {{$formecanique->prenomNomSupImmediat}}
                        </div>
                    </div>
                    <div class="detail-container-right">
                        <div class="genre-section">
                            <div class="titre">Genre: {{$formecanique->numPermisConduireEmploye}}</div>
                        </div>

                        
                        <div class="genre-section">
                            <div class="titre">Directeur: {{$formecanique->vehiculeCityonImplique}}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @endif

    @endsection
</body>
</html>