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
    </div>
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
  'url("https://w0.peakpx.com/wallpaper/342/133/HD-wallpaper-lovely-bridge-in-trois-rivieres-in-quebec-canada-r-bridge-arc-river-r-trees-clouds.jpg")',
  'url("https://i.pinimg.com/564x/4f/75/ca/4f75ca16d8551dde2bff5ca636b88c65.jpg")',
  'url("https://i.pinimg.com/564x/f3/b6/f7/f3b6f760fe350757871d6bed8c8fa68c.jpg")',
  'url("https://i.pinimg.com/564x/9f/5b/a2/9f5ba213bbfadc1745b368c0a5f09736.jpg")',
  'url("https://i.pinimg.com/564x/93/28/e6/9328e65301e611c6d15fb73b7318b255.jpg")',
  'url("https://i.pinimg.com/564x/21/9b/5f/219b5fab300d704dc88c3abf23d81d99.jpg")',
  'url("https://i.pinimg.com/564x/8f/ac/0a/8fac0a03fc04d7432ca55355ce22fb20.jpg")'
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


</script>  
</body>
</html>