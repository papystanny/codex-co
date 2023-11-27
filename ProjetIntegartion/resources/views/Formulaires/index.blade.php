<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/228206c737.js" crossorigin="anonymous"></script>
    <title>Visualisez les formulaires remplire</title>
</head>
<body>
@extends('layouts.app')

@section('contenu')    
    @if(count($formMec))
        <section class="main-container">
            <div class="location" id="home">
                <h3 id="home">Liste des Formulaires Mécanique Remplire</h3>
                <div class="row">
                    <div class="div">
                        @foreach($formMec as $formMec)
                            <div class="formMec">
                                <div class="formMecDetails">
                                    <div class="id">{{$formMec->id}}</div>
                                    <div class="numUniteImplique">{{$formMec->numUniteImplique}}</div>
                                    <div class="departement">{{$formMec->departement}}</div>
                                    <div class="prenomNomEmploye">{{$formMec->prenomNomEmploye}}</div>
                                    <div class="prenomNomSupImmediat">{{$formMec->prenomNomSupImmediat}}</div>
                                    <div class="numPermisConduireEmploye">{{$formMec->numPermisConduireEmploye}}</div>
                                    <div class="vehiculeCityonImplique">{{$formMec->vehiculeCityonImplique}}</div>
                                    <div class="notifSup">{{$formMec->notifSup}}</div>
                                    <div class="notifAdmin">{{$formMec->notifAdmin}}</div>
                                    <div class="created_at">{{$formMec->created_at}}</div> 
                                    <div class="updated_at">{{$formMec->updated_at}}</div>          
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="div">
                        @foreach($formsit as $formsit)
                            <div class="formSit">
                                <div class="formSitDetails">
                                    <div class="id">{{$formsit->id}}</div>
                                    <div class="nomEmploye">{{$formsit->nomEmployed}}</div>
                                    <div class="prenomEmploye">{{$formsit->prenomEmploye}}</div>
                                    <div class="matriculeEmploye">{{$formsit->matriculeEmploye}}</div>
                                    <div class="fonctionLorsEvenement">{{$formsit->fonctionLorsEvenement}}</div>
                                    <div class="secteurActivite">{{$formsit->secteurActivite}}</div>
                                    <div class="dateObservation">{{$formsit->dateObservation}}</div>
                                    <div class="heureObservation">{{$formsit->heureObservation}}</div>
                                    <div class="temoins">{{$formsit->temoins}}</div>
                                    <div class="descriptionEvenement">{{$formsit->descriptionEvenement}}</div>
                                    <div class="ameliorationsProposees">{{$formsit->ameliorationsProposees}}</div>
                                    <div class="supAvise">{{$formsit->supAvise}}</div>
                                    <div class="nomSuperviseur">{{$formsit->nomSuperviseur}}</div>
                                    <div class="dateSupeAvise">{{$formsit->dateSupeAvise}}</div>
                                    <div class="signatureEmploye">{{$formsit->signatureEmploye}}</div>
                                    <div class="dateSignatureEmploye">{{$formsit->dateSignatureEmploye}}</div>
                                    <div class="signatureSuperviseur">{{$formsit->signatureSuperviseur}}</div>
                                    <div class="dateSignatureSuperviseur">{{$formsit->dateSignatureSuperviseur}}</div>
                                    <div class="numPosteSuperviseur">{{$formsit->numPosteSuperviseur}}</div>
                                    <div class="notifSup">{{$formsit->notifSup}}</div>
                                    <div class="notifAdmin">{{$formsit->notifAdmin}}</div>
                                    <div class="created_at">{{$formsit->created_at}}</div>
                                    <div class="updated_at">{{$formsit->updated_at}}</div>
                                             
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </section>
    @endif
@endsection

    
</body>
</html>