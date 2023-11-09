@extends('layouts.app')
@section('content')
        <form action="{{ route('commandes.store') }}" method="POST">
            @csrf
            <div id="zoomContainer" class="container-fluid">
                @if (isset($article))
                    <!-- Main Zone -->
                    <div id="zoomInner" class="container">
                        <h1>{{ $article->nom }}</h1>
                    </div>
                    <article class="product">
                        <header>
                            <a class="remove">
                                <img src="https://th.bing.com/th/id/R.e719329a34a7f122879273a00e49993c?rik=gaISEA1EdHkqJw&pid=ImgRaw&r=0">
                            </a>
                        </header>
        
                        <div class="content contentPad">
                            <p>{{ $article->description }}</p>

                            <div id="zoomTaille">
                                @foreach ($tailles as $taille)
                                    <div class="articleSize hvr-grow">{{ $taille->nom }}</div>
                                @endforeach
                                <input type="hidden" name="taille" value="colorPicker()">
                            </div>
                            <input id="sizeInput" name="taille" type="hidden">

                            <div class="articleShow">
                                <a class="prev hvr-grow" onclick="plusSlides(-7)"><i class="fa-solid fa-chevron-left fa-2xl"></i></a>
                                <div class="mySlides xfade">
                                    @foreach ($couleurs as $couleur)
                                        <div class="articleColorShow hvr-grow" title="{{ $couleur->nom }}"></div>
                                    @endforeach
                                </div>
                                <a class="next hvr-grow" onclick="plusSlides(7)"><i class="fa-solid fa-chevron-right fa-2xl"></i></a>
                            </div>
                            <input id="colorInput" name="couleur" type="hidden">
                        </div>
        
                        <footer class="content">
                            <div id="qty">
                                <label for="quantitySelect">Quantité</label>
                                <select name="quantitySelect" id="quantitySelect">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <div class="vBtnShow">
                                <button class="full-priceShow" type="submit">
                                    <i class="fa-solid fa-cart-plus fa-xl"></i>
                                </button>
                            </div>
        
                        </footer>
                    </article>
                @else
                    <h3>Personnage non-existant</h3>
                @endif
            </div>
        </form>
@endsection