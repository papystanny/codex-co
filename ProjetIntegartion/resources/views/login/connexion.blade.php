<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Connexion</title>
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/login/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/login/animation.css')}}">
    <link rel="icon" href="https://tse1.mm.bing.net/th?id=OIP.BvE9Kz_K4pOY9ceOf4bLIQHaEK&pid=Api" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  
    <title> Page de Connexion</title>
</head>
<body>
    

    <!-- Section pour afficher les messages d'erreur -->
    @if(session('error'))
        <div class="alert" style="display: none;">
            {{ session('error') }}
        </div>
    @endif

 <div class="vueMobile"  >
    <div class="all"> 
        <div class ="image-un" style="display: none;">
            <img src="img/examen.png" class="img-fluid logo-marge-10" width="200%" height="100px">
        </div> 

        <div class ="titreImage" >
        </div> 

        <div class="main-section" >
            
            <form  method="POST" action="/connexion"> <!-- Remplacez "login.php" par le script de traitement de la connexion -->
            @csrf
                <div class="form-group">
                    <label>   Matricule  </label>
                <div class="form-groupUnite">   <i class="fas fa-user"></i> <input type="number" id="username" name="matricule" required class="custom-input"> </div>
                </div>
                <div class="form-group">
                    <label>   Mot de passe  </label>
                <div class="form-groupUnite"> <i class="fas fa-lock"></i>   <input type="password" id="password" name="password" required class="custom-input"> </div>
                </div>
                <div class="custom-submit">
                <button type="submit" >Connexion</button>
                </div>
            </form>
            <div class="additional-circle"></div>
            <div class="additional-arc"></div>
            <div class="subtle-blue-circle"></div> 
        </div>
    </div>
 </div>

 <div class="vuePc" >

 <div class="vuePc"  >

    <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
    <form  method="POST" action="/connexion"> <!-- Remplacez "login.php" par le script de traitement de la connexion -->
    @csrf
        <h3 style="color:black" >Connexion </h3>

        <label for="username" style="color:grey" >matricule</label>
        <input type="number" id="username" name="matricule"  style="color:black" required class="custom-input">

        <label for="password" style="color:grey">mot de passe</label>
        <input type="password" id="password" name="password"  style="color:black" required class="custom-input">

        <button type="submit" style="background: #aeaeba; margin-top:30px;" >Connexion</button>
        
    </form>

 </div>

   
 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
<script>
document.addEventListener("DOMContentLoaded", function() {
    var alertElement = document.querySelector('.alert');
    if (alertElement) {
        alertElement.style.display = 'flex'; 

        setTimeout(function() {
            alertElement.style.display = 'none';
        }, 5000);
    }
});

const images = [
  'url("https://i.pinimg.com/564x/34/4f/bd/344fbdc16a9d0cfc2566cc11e651d43f.jpg")',
  'url("https://i.pinimg.com/564x/a0/17/35/a017355e83f8f60209094047a6dba5c7.jpg")',
  'url("https://i.pinimg.com/564x/da/c7/32/dac732ac34789ab390c072195ac02f01.jpg")',
  'url("https://i.pinimg.com/564x/af/75/da/af75dab13c9bf8d32255daf602f8ddc2.jpg")',
  'url("https://i.pinimg.com/564x/93/28/e6/9328e65301e611c6d15fb73b7318b255.jpg")',
  'url("https://i.pinimg.com/564x/9c/f1/6b/9cf16b92b4e62ea37f673cb7aeff0450.jpg")'
];


let currentIndex = 0;

function changeBackground() {
  document.querySelector('.titreImage').style.backgroundImage = images[currentIndex];
  currentIndex = (currentIndex + 1) % images.length;
}


setInterval(changeBackground, 5000); 






document.querySelectorAll('.form-groupUnite input').forEach(input => {
  input.addEventListener('focus', function() {
    this.parentNode.classList.add('active');
  });

  input.addEventListener('blur', function() {
    this.parentNode.classList.remove('active');
  });
});

</script>

<script src="js/loginAnimationMobile.js" defer></script>
</script>  
</body>
</html>