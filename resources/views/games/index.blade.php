<!doctype html>
<html lang="pl">
  
@include('shared.header')

  <body>
    @include('shared.nav')
    <div class="container">

      <div class="card d-flex row mt-4">
      @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif  

        <h3 class="card-header">Najbliższe rozgrywki:</h3>

        <div class="row">
        @forelse($games as $game)
        <div class="col g-3">
              <div class="card">
                <img src="{{ asset('storage/img/tt' . $game->id . '.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <a class="card-title pitch-title" href="{{ route('games.show', $game->id) }}">{{ $game->name }}</a>
                  <h6 class="card-subtitle mb-2">{{ $game->pitch->name }}</h6>
                  <p class="card-text">od: {{ substr($game->hour_start, 0,-3) }} do: {{ substr($game->hour_end, 0,-3) }}</p>
                  <div class="game-info">
                    <a href="{{ route('games.show', $game->id) }}" class="card-text game-info">Dołącz
                    <?php 
                      $p_avalible = 0;
                      for ($i=0; $i < count($players); ++$i) {
                          $player = $players[$i];
                          if ($player->game->id == $game->id && ($player->status == "gra" || $player->status == "rezerwowy")) ++$p_avalible; }
                      $p_left = $game->max_players - $p_avalible;
                      echo $p_left, "/", $game->max_players; ?>
                    </a>
                  </div>
              </div>
            </div>
        </div>
        @empty
            <p>Brak dostępnych gier.</p>
        @endforelse
        </div>

      </div>
    </div>
    @include('shared.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>