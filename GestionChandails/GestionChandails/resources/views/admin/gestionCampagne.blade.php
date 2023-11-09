@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/admin/gestionCampagne.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/calendrier.css')}}">

@section('content')
<div class="parallax" ></div>
<div class="container-fluid">
	<div class="row" style="white-space: nowrap; margin-left:10px; margin-bottom:40px;">
		   <span> >  Campagne actuelle</span>	
	</div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-3  p-0 " style="margin-left:18px;  margin-top:90px;">

                <div class="col un_Row_1">
                    <div class="col un_titre ">
                        <h3>   {{$campagneActuel->nom}} </h3>
                    </div>
                    <div class="col" style="margin-top:15px">
                                <div class="row ">
                                    <div class="col-xl-12 " > 
                                        <h5> Responsable: <b>  Fabrice Dehoule </b>    </h5>   
                                    </div> 
                                    
                                    <div class="col-xl-12 " > 
                                        <h5>  Date debut de campagne: <b>   {{$campagneActuel->dateDebut}}   </b>  </h5>   
                                    </div> 
                                </div>
                    </div>
                </div>



                    <div class="col un_deux">
                        <div class="col  " style="text-align:center; background-color:orange;">
                            <h3> Sondage </h3>
                        </div>
                        <div class="col" style="margin-top:15px">
                                <div class="row ">
                                    <div class="col-xl-12   " > 
                                        <h5> Début de sondage   </h5>   
                                    </div> 
                                    <div class="col-xl-12 " > 
                                        <h5>  Fin de sondage  </h5>   
                                    </div> 
                                </div>
                         </div>
                    </div>

                    <div class="col un_deux">
                        <div class="col  " style="text-align:center; background-color:blue;">
                            <h3>  Mes services </h3>
                        </div>
                        <div class="col" style="margin-top:15px">
                                <div class="row ">
                                    <div class="col-xl-12   " > 
                                        <h5> Terminer la campagne   </h5>   
                                    </div> 
                                    <div class="col-xl-12 " > 
                                        <h5>  </b>  </h5>   
                                    </div> 
                                </div>
                         </div>
                    </div>
        </div>

        <div class="col-md-4 " style=" margin-right:110px; margin-left:110px;">
                <div class="row "> 
                    <div class="col-md-12 " "> 
                        <h4 > Activités dans la campagne </h4>
                        <hr>
                    </div>
                </div>

               <div class="col fermer_card "> 
                    <div class="col deux_titre  "  style="background-color:orange;">
                                <h3 style="padding-left:10px;"> Articles </h3>
                    </div>
                    <div class="col p-0 option"> 
                        <p  style=" padding-top:8px; padding-left:45px; ">   Ajouter un article  </p>
                            <hr  width="85%" style="margin-left:5% !important;" >
                    </div>
                    <div class="col option"> 
                        <p  style=" padding-left:45px; ">   Supprimer un article  </p>
                        <hr  width="85%" style="margin-left:5% !important;" >
                    </div>
                    <div class="col option"> 
                        <p  style=" padding-left:45px; ">   Activer un article  </p>
                    </div>
                </div>

                

                <div class="col fermer_card " style="margin-top:30px;"> 
                    <div class="col deux_titre  "  style="background-color:orange;">
                                <h3 style="padding-left:10px;"> Quantité </h3>
                    </div>
                    <div class="col p-0 option"> 
                        <p  style=" padding-top:8px; padding-left:45px; ">  Changer la quantité permise par client  </p>
                    </div>
                </div>

                <div class="col fermer_card " style="margin-top:30px;"> 
                    <div class="col deux_titre  "  style="background-color:orange;">
                                <h3 style="padding-left:10px;"> Couleurs </h3>
                    </div>
                    <div class="col p-0 option"> 
                        <p  style=" padding-top:8px; padding-left:45px; ">   Ajouter une couleur  </p>
                            <hr  width="85%" style="margin-left:5% !important;" >
                    </div>
                    <div class="col option"> 
                        <p  style=" padding-left:45px; ">   Supprimer une couleur  </p>
                        <hr  width="85%" style="margin-left:5% !important;" >
                    </div>
                    <div class="col option"> 
                        <p  style=" padding-left:45px; ">   Activer une couleur  </p>
                    </div>
                </div>

        </div>




        <div class="col-md-3 " style="">
             <div class="col trois_un">
                    <div class="col  "  style="background-color:green; text-align:center;">
                         <h3> Message </h3>
                    </div> 
                    <div class="col" style="margin-left:8px;">
                        <p> Bon retour dans la campagne.  </p>
                        <p> Vous  disposer d'un tas d'accès en cour vu que vous en êtes le créateur. <br> Vous pouver ajouter un article, une taille ou une couleur qui n'est pas encore été ajoutée. <br> Pour rendre un article, une couleur ou une taille visible dans la campagne, vous devez l'activer au préalable.   </p>
                    </div>
             </div>

             <div class="col trois-deux">
                    <div class="col  "  style="background-color:orange; text-align:center;">
                         <h3> calendrier </h3>
                    </div> 
                    <div class="col " style="margin-left:8px;">
                        
                      <div class="calendar"> </div>
                    </div>
             </div>

        </div>

        </div>
           
    </div>
</div>


@endsection
<script src="{{ asset('js/campagne/calendrier.js') }}" defer></script>