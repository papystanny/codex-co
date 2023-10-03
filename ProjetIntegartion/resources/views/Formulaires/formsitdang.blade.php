<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
    <title>Document</title>
    <style>

 .parent{
    background-color: white;
    border: 1px solid black;
    height:100%;
    width:50%;
}

.enfant
{
    border: solid black 1px;
    color: white;
}
.enfant1{
    background-color: white;
    color: black;
}
.enfant2{
    background-color: black;
}
.center {
  text-align: center;
}
.color{
    background-color: gray;
}
</style>
</head>
<body>
<section class="main-container border" >
    <form method="post" >
          @csrf

          <div class="parent container-fluid">
             <div class="row h-25">
                <div class= "enfant enfant1 col-lg-6 p-4">&nbsp</div>
                <div class="enfant enfant2 col-lg-6 p-4"><h2>Création du Formulaire  Signalement d'une situation dangereuse,d'un acte de violence ou d'un  passé proche</h2></div>
             </div>
          </div>

          <div class="parent container-fluid">
              <div class="row center ">
                <div class= " enfant enfant1 col-lg-12 "><h2>Identification</h2></div>      
              </div>
          </div>

          <div class="parent container-fluid">
             <div class="row">
                <div class= "enfant enfant1 col-lg-4 p-4">
                <label for="fname">Nom:</label><br>
                <input type="text" id="nom" name="nom">
                </div>
                <div class= "enfant enfant1 col-lg-4 p-4">
                <label for="fname">Prenom:</label><br>
                <input type="text" id="nom" name="nom">
                </div>
                <div class= "enfant enfant1 col-lg-4 p-4">
                <label for="fname">Matricule:</label><br>
                <input type="text" id="nom" name="nom">
                </div>
             </div>
          </div>

          <div class="parent container-fluid">
             <div class="row">
                <div class= "enfant enfant1 col-lg-6 p-4">
                <label for="fname">Fonction au moment de l'evenement:</label>
                <input type="text" id="nom" name="nom">
                </div>
                <div class= "enfant enfant1 col-lg-6 p-4">
                <label for="fname">Secteur d'activité:</label><br>
                <input type="text" id="nom" name="nom">
                </div>
            </div>
           </div>
          <div class="parent container-fluid">
              <div class="row center ">
                <div class= " enfant enfant1 col-lg-12 "><h3>Description de la situation dangereuse ou du passé proche</h3></div>      
              </div>
          </div>

        <div class="parent container-fluid">
            <div class="row">
                <div class= "enfant enfant1 col-lg-4 p-4">                              
                    <form action="/action_page.php">
                    <label for="Date">Date de L'Observation:</label>
                    <input type="date" id="date" name="date">
                    </form>
                </div>
                <div class= "enfant enfant1 col-lg-4 p-4">
                    <form action="/action_page.php">
                        <label for="heure">Heure de L'Observation:</label><br>
                        <input type="time" id="heure" name="heure">
                    </form>
                </div>
                <div class= "enfant enfant1 col-lg-4 p-4">
                <form action="/action_page.php">
                    <label for="fname">Témoin(s):</label>
                    <input type="text" id="temoin" name="temoin">
                </form>
                </div>
            </div>
        </div>
        <div class="parent container-fluid">
              <div class="row">
                <div class= " enfant enfant1 col-lg-12 "><h3>Lien</h3></div>      
              </div>
         </div>
          
        <div class="parent container-fluid">
              <div class="row">
                <input type="text" id="fname" name="fname">
                <input type="text" id="fname" name="fname">
                <input type="text" id="fname" name="fname">
                <input type="text" id="fname" name="fname">
                <input type="text" id="fname" name="fname">
                <input type="text" id="fname" name="fname">
                <input type="text" id="fname" name="fname">
              </div>
          </div>

          <div class="parent container-fluid">
              <div class="row">
                <div class= " enfant enfant1 col-lg-12 "><h4>Correction(s) ou amélioration(s) proposée(s)</h4></div> 
                <input type="text" id="fname" name="fname">
                <input type="text" id="fname" name="fname">
                <input type="text" id="fname" name="fname">
                <input type="text" id="fname" name="fname">     
              </div>
         </div>
         <div class="parent container-fluid">
              <div class="row ">
                <div class= " color enfant enfant1 col-lg-12 ">&nbsp</div>      
              </div>
          </div>
          <div class="parent container-fluid">
              <div class="row ">
                <form action="/action_page.php">
                <div class="col-lg-6">
                        <input type="checkbox" id="aviser" name="aviser" value="aviser">
                        <label for="aviser">J'ai aviser mon supérieur immédiate    le </label>
                        <input type="date" id="date" name="date">
                </div>
                       
                </form>  
              </div>
          </div>

          <div class="parent container-fluid">
              <div class="row ">
                    <div class= " col-xl-12">
                        <label for="fname">Nom en Caractères d'imprimerie:</label>
                        <input type="text" id="nom" name="nom">
                   </div>
              </div>
          </div>
  
          <div class="parent container-fluid">
             <div class="row">
                <div class= "enfant enfant1 col-lg-6 p-4">
                <label for="fname">Signature du travailleur ou de la travailleuse:</label>
                <input type="text" id="Signature" name="Signature">
                </div>
                <div class= "enfant enfant1 col-lg-6 p-4">
                <label for="Date">Date:</label><br>
                    <input type="date" id="date" name="date">
                </div>
            </div>
           </div>
           <div class="parent container-fluid">
            <div class="row">
                <div class= "enfant enfant1 col-lg-4 p-4">                              
                    <form action="/action_page.php">
                    <label for="Date">Signature du supérieur Immédiate:</label>
                    <input type="text" id="temoin" name="temoin">
                    </form>
                </div>
                <div class= "enfant enfant1 col-lg-4 p-4">
                    <form action="/action_page.php">
                        <label for="heure">N0 de Poste:</label><br>
                        <input type="text" id="NoPoste" name="NoPoste">
                    </form>
                </div>
                <div class= "enfant enfant1 col-lg-4 p-4">
                <form action="/action_page.php">
                    <label for="fname">date:</label><br>
                    <input type="date" id="date" name="date">
                </form>
                </div>
            </div>
        </div>
</form>

</section>      
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>

</section >            
</body>
</html>