@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <h1><b> Formulaires </b></h1>  
           <h4> <a href="/AccidentTravail"> Formulaire d'accident de travail </a> </h4>
           
         <h4>   <a href="#"> Formulaire de signalement d'une situation dangereuse </a> </h4>
         <h4>   <a href="#"> Formulaire Atelier Mecanique </a> </h4>
         <h4>   <a href="/AuditSST"> Formulaire d'audit SST</a> </h4>
            <br>
        </div>
    </div>
</div>
<div class="contsiner-fluid">
    <div class="row ">
        <div class="col-md-8">
            <h1><b>notifications</b></h1>  
   <!--         @foreach ($data as $item)
    @if ($item->nom_colonne === 'valeur_recherchee')
        <p>La valeur recherchée existe dans la base de données.</p>
    @else
        <p>La valeur recherchée n'existe pas dans la base de données.</p>
    @endif
@endforeach
-->
            <br>
        </div>
    </div>

</div>
@endsection