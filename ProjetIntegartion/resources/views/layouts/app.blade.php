<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" media="(max-width: 768px)" href="css/layout.css">

  
     <title>@yield('titre')</title>
</head>
<body>
   
<!-- HEADER -->
            <header>
               <nav class="main-nav">
                  <div class="container-fluid">
                     <div class="row">
                           <div class="col-sm-2  p-0">
                              <img src="img/examen.png" class="img-fluid logo-marge-10" width="80px" height="80px">
                           </div>

                           <div class="col-sm-2    p-0">
                              <img src="img/examen.png" class="img-fluid logo-marge-10" width="80px" height="80px">
                           </div>
                     </div>
                  </div>
               </nav>
            </header>
<!-- END OF HEADER -->
    
 
    @yield('contenu')

    
    <!-- END OF LINKS -->

    <!-- FOOTER -->
    <footer>
    <div class="row align-items-center text-center h-100  py-5">
      <p>&copy 1997-2018 Netflix, Inc.</p>
    </footer>
   </div>
  
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
