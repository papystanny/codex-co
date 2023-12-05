<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/employe/accueil.css')}}">
    <link rel="icon" href="https://tse1.mm.bing.net/th?id=OIP.BvE9Kz_K4pOY9ceOf4bLIQHaEK&pid=Api" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
    <title>Formulaire d'Accident de Travail</title>
    <style>
        .header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 10px 0;
        }
        .section {
            background-color: #fff;
            border: 1px solid #dee2e6;
            margin-bottom: 20px;
            padding: 20px;
        }
        .section-title {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
   <!-- Section pour afficher les messages d'erreur -->
   @if(session('error'))
        <div class="alert" style="display: none;">
            {{ session('error') }}
        </div>
    @endif


@extends('layouts.app')

@section('contenu')


<div class="container mt-5">
        <div class="header">
            <h2 class="text-center">Formulaire d'Accident de Travail</h2>
        </div>

        <!-- Formulaire -->
        <form method="post" action="{{ route('employe.formAccidentTravailStore') }}" enctype="multipart/form-data">
            @csrf

            <!-- Section Identification -->
            <div class="section">
                <h3 class="section-title">Identification</h3>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="matriculeEmploye" class="form-label">Matricule</label>
                        <input type="text" class="form-control @error('matriculeEmploye') is-invalid @enderror" id="matriculeEmploye" name="matriculeEmploye" value="{{old('matriculeEmploye')}}">
                        @error('matriculeEmploye')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="fonctionMomentEvenement" class="form-label">Fonction au moment de l'évènement</label>
                        <input type="text" class="form-control @error('fonctionMomentEvenement') is-invalid @enderror" id="fonctionMomentEvenement" name="fonctionMomentEvenement" value="{{old('fonctionMomentEvenement')}}">
                        @error('fonctionMomentEvenement')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section Détails de l'accident -->
            <div class="section">
                <h3 class="section-title">Détails de l'accident</h3>
                <div class="mb-3">
                    <label for="dateAccident" class="form-label">Date de l'accident</label>
                    <input type="date" class="form-control @error('dateAccident') is-invalid @enderror" id="dateAccident" name="dateAccident" value="{{old('dateAccident')}}">
                    @error('dateAccident')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="heureAccident" class="form-label">Heure de l'accident</label>
                    <input type="time" class="form-control @error('heureAccident') is-invalid @enderror" id="heureAccident" name="heureAccident" value="{{old('heureAccident')}}">
                    @error('heureAccident')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nomsTemoins" class="form-label">Nom des témoins (si aucun, mentionnez-le)</label>
                    <input type="text" class="form-control @error('nomsTemoins') is-invalid @enderror" id="nomsTemoins" name="nomsTemoins" value="{{old('nomsTemoins')}}">
                    @error('nomsTemoins')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="endroitAccident" class="form-label">Endroit de l'accident</label>
                    <input type="text" class="form-control @error('endroitAccident') is-invalid @enderror" id="endroitAccident" name="endroitAccident" value="{{old('endroitAccident')}}">
                    @error('endroitAccident')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="secteurActivite" class="form-label">Secteur d'activité</label>
                    <input type="text" class="form-control @error('secteurActivite') is-invalid @enderror" id="secteurActivite" name="secteurActivite" value="{{old('secteurActivite')}}">
                    @error('secteurActivite')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Ajoutez ici les autres champs relatifs aux détails de l'accident... -->
            </div>


            <div class="container">
                <div class="row">
                    <!-- Section Nature et site de la blessure -->
                    <div class="col-md-6">
                        <div class="section">
                            <h3 class="section-title">Nature et site de la blessure</h3>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label class="form-label">Sélectionnez les zones blessées :</label>

                                    <!-- Zone Tête, visage, nez, yeux, oreilles -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="zoneTete" name="natureBlessure[]" value="tête, visage, nez, yeux, oreilles" onchange="toggleSubOptions(this, 'subOptionsTete')">
                                        <label class="form-check-label" for="zoneTete">Tête, visage, nez, yeux, oreilles</label>
                                        <div id="subOptionsTete" style="display: none; margin-left: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="teteDroite" name="coteTete" value="droite">
                                                <label class="form-check-label" for="teteDroite">Droite</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="teteGauche" name="coteTete" value="gauche">
                                                <label class="form-check-label" for="teteGauche">Gauche</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Zone Torse -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="zoneTorse" name="natureBlessure[]" value="torse" onchange="toggleSubOptions(this, 'subOptionsTorse')">
                                        <label class="form-check-label" for="zoneTorse">Torse</label>
                                        <div id="subOptionsTorse" style="display: none; margin-left: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="torseDroite" name="coteTorse" value="droite">
                                                <label class="form-check-label" for="torseDroite">Droite</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="torseGauche" name="coteTorse" value="gauche">
                                                <label class="form-check-label" for="torseGauche">Gauche</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Zone Bras, épaules, coudes -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="zoneBras" name="natureBlessure[]" value="bras, épaules, coudes" onchange="toggleSubOptions(this, 'subOptionsBras')">
                                        <label class="form-check-label" for="zoneBras">Bras, épaules, coudes</label>
                                        <div id="subOptionsBras" style="display: none; margin-left: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="brasDroite" name="coteBras" value="droite">
                                                <label class="form-check-label" for="brasDroite">Droite</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="brasGauche" name="coteBras" value="gauche">
                                                <label class="form-check-label" for="brasGauche">Gauche</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Zone Poignets, mains, doigts -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="zoneMains" name="natureBlessure[]" value="poignets, mains, doigts" onchange="toggleSubOptions(this, 'subOptionsMains')">
                                        <label class="form-check-label" for="zoneMains">Poignets, mains, doigts</label>
                                        <div id="subOptionsMains" style="display: none; margin-left: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="mainsDroite" name="coteMains" value="droite">
                                                <label class="form-check-label" for="mainsDroite">Droite</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="mainsGauche" name="coteMains" value="gauche">
                                                <label class="form-check-label" for="mainsGauche">Gauche</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Zone Dos -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="zoneDos" name="natureBlessure[]" value="dos" onchange="toggleSubOptions(this, 'subOptionsDos')">
                                        <label class="form-check-label" for="zoneDos">Dos</label>
                                        <div id="subOptionsDos" style="display: none; margin-left: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="dosHaut" name="coteDos" value="haut">
                                                <label class="form-check-label" for="dosHaut">Haut</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="dosBas" name="coteDos" value="bas">
                                                <label class="form-check-label" for="dosBas">Bas</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Hanche -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="hanche" name="natureBlessure[]" value="Hanche" onchange="toggleSubOptions(this, 'subOptionsHanche')">
                                        <label class="form-check-label" for="hanche">Hanche</label>
                                        <div id="subOptionsHanche" style="display: none; margin-left: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="hancheDroite" name="coteHanche" value="droite">
                                                <label class="form-check-label" for="hancheDroite">Droite</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="hancheGauche" name="coteHanche" value="gauche">
                                                <label class="form-check-label" for="hancheGauche">Gauche</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Jambe, genou -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="jambeGenou" name="natureBlessure[]" value="Jambe,genou" onchange="toggleSubOptions(this, 'subOptionsJambeGenou')">
                                        <label class="form-check-label" for="jambeGenou">Jambe, genou</label>
                                        <div id="subOptionsJambeGenou" style="display: none; margin-left: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="jambeGenouDroite" name="coteJambeGenou" value="droite">
                                                <label class="form-check-label" for="jambeGenouDroite">Droite</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="jambeGenouGauche" name="coteJambeGenou" value="gauche">
                                                <label class="form-check-label" for="jambeGenouGauche">Gauche</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pied, Orteil, Cheville -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="piedOrteilCheville" name="natureBlessure[]" value="Pied,Orteil,Cheville" onchange="toggleSubOptions(this, 'subOptionsPiedOrteilCheville')">
                                        <label class="form-check-label" for="piedOrteilCheville">Pied, Orteil, Cheville</label>
                                        <div id="subOptionsPiedOrteilCheville" style="display: none; margin-left: 20px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="piedDroite" name="cotePied" value="droite">
                                                <label class="form-check-label" for="piedDroite">Droite</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="piedGauche" name="cotePied" value="gauche">
                                                <label class="form-check-label" for="piedGauche">Gauche</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Continuez avec d'autres zones comme les jambes, les pieds, etc., en suivant le même modèle. -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section Description de la Blessure -->
                    <div class="col-md-6">
                        <div class="section">
                            <h3 class="section-title">Description de la Blessure</h3>
                            <div class="form-group">
                                <!-- Ici, insérez les options de description de la blessure -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brulureEngelure" name="descriptionBlessure[]" value="Brûlure, engelure">
                                    <label class="form-check-label" for="brulureEngelure">Brûlure, engelure</label>
                                </div>
                                <!-- Répétez pour les autres options de blessure -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          




            <!-- Section Premiers soins -->
            <div class="section">
                <h3 class="section-title">Premiers Soins</h3>
                <div class="mb-3">
                    <label for="nomSecouriste" class="form-label">Nom du secouriste</label>
                    <input type="text" class="form-control @error('nomSecouriste') is-invalid @enderror" id="nomSecouriste" name="nomSecouriste" value="{{old('nomSecouriste')}}">
                    @error('nomSecouriste')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Ajoutez ici d'autres champs relatifs aux premiers soins... -->
            </div>

            <!-- Bouton de soumission -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </form>
    </div>

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
</script> 

<script>
    function toggleSubOptions(checkbox, subOptionId) {
        var subOptions = document.getElementById(subOptionId);
        if (checkbox.checked) {
            subOptions.style.display = 'block';
        } else {
            subOptions.style.display = 'none';
        }
    }
</script>


@endsection

<script src="js/employe/accueil.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>