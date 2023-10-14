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
    background-color: grey;
   
    height:100%;
    width:50%;
}

.enfant
{
    border: solid black 1px;
    color: black;
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
          <h2 class="titreForm align-items center">Formulaire Atelier Mécanique - Rapport d'accident </h2><br><br>
    <form method="post" enctype="multipart/form-data">
          @csrf

          <div class="parent container-fluid">
             <div class="row h-25">
                <!-- <div class= "enfant enfant1 col-lg-6 p-4">&nbsp</div> -->
                <div class="enfant  col-lg-12 p-4"><h1>Atelier Mécanique - Rapport d'accident</h1></div>
             </div>
          </div><br><br>
            <div class = " align-items center">
                <h3  class="titreForm col-6 p-4">Bonjour .Lorsque vous Soumettre ce formulaire,le propriétaire verra votre nom et votre adresse e-mail. </h3>
            </div>
    </form>
</section>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>

          
</body>
</html>



