<!doctype html>
<html lang="pl">
  
@include('shared.header')

  <body>
    @include('shared.nav')
    <div class="container">

    <div class="card d-flex row mt-4">
        <h3 class="card-header">{{ $pitch->name }}</h3>
   
        <div class="row row-cols-1 row-cols-md-2 mb-3">
        <div class="col g-3">
            <a class="card-title pitch-title" href="{{ getGMaps($pitch) }}"  target="_blank">Zobacz na mapie</a>
            <p class="card-subtitle">Opiekun obiektu: {{ $pitch->user->name }}, Telefon: {{ $pitch->user->phone }}</p>
            <p class="card-subtitle">Godziny otwarcia: {{ $pitch->hour_open }} - {{ $pitch->hour_close }}</p>
            <p class="card-subtitle">Adres: {{ $pitch->address }}</p>
            <p class="card-text">Opis: {{ $pitch->description }}</p>
            
            <a class="button" href="">Mecze</a>
            <a class="button" href="">Edytuj</a>
            <a href="{{ route('games.new', $pitch) }}" class="card-link button">Stwórz grę</a>

        </div>
        <div class="col g-3">
            <h5 class="card-title">Mecze na tym obiekcie</h5>
            <p id="todo">pokaż kalendarz</p>
            @forelse($games as $game)
                <a class="card-text" href="{{ route('games.show', $game->id) }}">{{ $game->name }} ({{ date('m-d', strtotime($game->date)) }}   od: {{ $game->hour_start }} do: {{ $game->hour_end }})</a>
            @empty
                <p>Brak gier na tym obiekcie.</p>
            @endforelse
        </div>
        </div>
    </div>
 

    </div>
    @include('shared.footer')

    <script type="text/javascript">
        function showInfo() {
            var x = document.getElementById("hidden");
            if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }}
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>

<?php

use Illuminate\Support\Facades\Redirect;

function getGMaps($pitch) {
    $url='https://www.google.com/maps/place/';
    $url.=$pitch->address;
    echo $url;
}
    
?>