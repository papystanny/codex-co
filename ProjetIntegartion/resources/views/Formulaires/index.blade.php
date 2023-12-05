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
                                
    <form >    
            <div class = " center">
                <h3  class="titreForm col-8 p-2">
                1.Numéro(s) d'unités(s) impliqué(s)
                 </h3>         
            </div>
            <div class = "titreForm col-8 p-2">

             <div class="numUniteImplique">{{$formMec->numUniteImplique}}</div>
                      
            </div>
            <div class = "titreForm col-8 p-2">
                <h3  class="titreForm col-8 p-2">
                2.Département* 
                 </h3>         
            </div>
            <div class = "titreForm col-8 p-2">
            <div class="departement">{{$formMec->departement}}</div>  
            </div>     
            <div class = " titreForm col-8 p-2">
                <h3  class="titreForm col-8 p-2">
                3.Prenom et Nom de l'employé impliqué
                 </h3>  
                 <div class = "titreForm col-8 p-2">
            <div class="departement">{{$formMec->nomEmploye}}</div>  
            </div>        
            </div>
               
            <div class = "titreForm col-8 p-2">
                <h3  class="titreForm col-8 p-2">
                4.Prenom et Nom du supérieur immédiat 
                 </h3>         
            </div>
            <div class = "titreForm col-8 p-2">
            <div class="prenomNomSupImmediat">{{$formMec->prenomNomSupImmediat}}</div>
            </div>      
            <div class = "titreForm col-8 p-2">
                <h3  class="titreForm col-8 p-2">
                5.Numéro du permis de conduire de l'employé 
                 </h3>         
            </div>
            <div class = "titreForm col-8 p-2">
            <div class="numPermisConduireEmploye">{{$formMec->numPermisConduireEmploye}}</div>
            </div> 
            <div class = "titreForm col-8 p-2">
                <h3  class="titreForm col-8 p-2">
                6.Autres Véhicules impliqués(Citoyen) 
                 </h3>         
            </div>   
            <div class = " titreForm col-8 p-2">
            <div class="vehiculeCityonImplique">{{$formMec->vehiculeCityonImplique}}</div>
            </div>  
            <div class = "titreForm col-8 p-2">
                <h3  class="titreForm col-8 p-2">
                7.Le superviseur a été aviser? 
                 </h3>         
            </div>
            <div class = "titreForm col-8 p-2">
            <div class="notifSup">{{$formMec->notifSup}}</div>
            </div> 
            <div class = "titreForm col-8 p-2">
                <h3  class="titreForm col-8 p-2">
                8.l'admin a été aviser? 
                 </h3>         
            </div>
            <div class = "titreForm col-8 p-2">
            <div class="notifAdmin">{{$formMec->notifAdmin}}</div>
            </div> 
                                 
    </form>

    </div>                                                
</div>
  @endforeach
                    </div>
                    <h3 id="home">Liste des Formulaires de Situation Dangereuses</h3>
                    <div class="div">
                        @foreach($formsit as $formsit)
                            <div class="formSit">
                            <div class="formSitDetails">      
          <div class="parent container-fluid">
          
             <div class="row">
                <div class= "titreForm col-8 p-2">
                    <label for="fname">Nom:</label><br>
                    <div class="nomEmploye">{{$formsit->nomEmploye}}</div>
                </div>
               <div class= "titreForm col-8 p-2">
                    <label for="fname">Prenom:</label><br>
                    <div class="prenomEmploye">{{$formsit->prenomEmploye}}</div>
                </div>
                <div class= "titreForm col-8 p-2">
                    <label for="fname">Matricule:</label><br>
                    <div class="matriculeEmploye">{{$formsit->matriculeEmploye}}</div>
                </div>
             </div>
          </div>

          <div class="parent container-fluid">
                <div class="row">
                        <div class= "titreForm col-8 p-2">
                            <label for="fname">Fonction au moment de l'evenement:</label>
                            <div class="fonctionLorsEvenement">{{$formsit->fonctionLorsEvenement}}</div>
                        </div>
                        <div class= "titreForm col-8 p-2">
                            <label for="fname">Secteur d'activité:</label><br>
                            <div class="secteurActivite">{{$formsit->secteurActivite}}</div>
                        </div>
                </div>
           </div>
          <div class="parent container-fluid">
                
                <div class="row">
                        <div class= "titreForm col-8 p-2">
                        <div class="dateObservation">{{$formsit->dateObservation}}</div>
                        </div>
                </div>
          </div>

        <div class="parent container-fluid">
            <div class="row">
                    <div class= "titreForm col-8 p-2">                              
                    
                        <label for="Date">Date de L'Observation:</label>
                        <div class="heureObservation">{{$formsit->heureObservation}}</div>
                    </div>
                    <div class= "titreForm col-8 p-2">
                        
                            <label for="heure">Heure de L'Observation:</label><br>
                            <div class="temoins">{{$formsit->temoins}}</div>
                    
                    </div>
                    <div class= "titreForm col-8 p-2">
                    
                        <label for="fname">Témoin(s):</label>
                        <div class="descriptionEvenement">{{$formsit->descriptionEvenement}}</div>
            </div>
        </div>
     
          <div class="titreForm col-8 p-2">
                <div class="row">
                    <label for="fname">Correction(s) ou amélioration(s) proposée(s)</label>
                    <div class="ameliorationsProposees">{{$formsit->ameliorationsProposees}}</div> 
                </div>
         </div>
        
         
         <div class="titreForm col-8 p-2">
                <div class="row">
                <label for="fname">dateSupeAvise:</label>
                    <div class="dateSupeAvise">{{$formsit->dateSupeAvise}}</div>
                </div>
         </div>
       
         <!-- <div class="parent container-fluid">
                <div class="row ">
                    <div class= " color enfant enfant1 col-lg-12 ">&nbsp</div>      
                </div>
          </div>
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
                                                 
                                </div>
                            </div> -->
                        @endforeach
                    </div>
                </div>
        </section>
    @endif
@endsection
</body>
</html>