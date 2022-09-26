<!doctype html>
<html lang="pl">
  
@include('shared.header')

  <body>
    @include('shared.nav')
    <div class="container mt-3 mb-5">
    @if (session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
     @endif

    <div class="card d-flex row mt-4">
        <h3 class="card-header">Nowa gra</h3>
        <!--  TODO: UWZGLĘDNIJ GODZINY OTWARCIA -->
        <h3>GODZINY OTWARCIA {{ $game->pitch->hour_open }} - {{ $game->pitch->hour_close }}</h3>

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

    <form method="POST" action="{{ route('games.store') }}">
      <div class="form-group mb-2">
        <label for="name">Nazwa</label>
        <input id="name" name="name" type="text"
          class="@error('name') is-invalid @else is-valid @enderror">
          <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
      </div>
      <div class="form-group mb-2">
        <label for="date">Data</label>
        <input id="date" name="date" type="text"
          class="@error('date') is-invalid @else is-valid @enderror">
          <div class="invalid-feedback">Nieprawidłowa data!</div>
      </div>
      <div class="form-group mb-2">
        <label for="max_players">Max graczy</label>
        <input id="max_players" name="max_players" type="text"
          class="@error('max_players') is-invalid @else is-valid @enderror">
          <div class="invalid-feedback">Nieprawidłowa liczba!</div>
      </div>
      <div class="form-group mb-2">
        <label for="description">Opis</label>
        <input id="description" name="description" type="text"
          class="@error('description') is-invalid @else is-valid @enderror">
          <div class="invalid-feedback">Nieprawidłowy opis!</div>
      </div>
      
<!-- test test test 
      use Label84\HoursHelper\Facades\HoursHelper;  
      
                                    start     end     time
      $result = HoursHelper::create('08:00', '09:00', 15);

      !! ALWAYS ADD +10 MIN !!
      $avalible_to_play = HoursHelper::create( $pitch->hour_open, $pitch->hour_close, 10);
-->

      <div class="form-group mb-2">
        <label for="hour_start">Start</label>
        <input id="hour_start" name="hour_start" type="text"
          class="@error('hour_start') is-invalid @else is-valid @enderror">
          <div class="invalid-feedback">Nieprawidłowa godzina!</div>
      </div>
      <div class="form-group mb-2">
        <label for="hour_end">Koniec</label>
        <input id="hour_end" name="hour_end" type="text"
          class="@error('hour_end') is-invalid @else is-valid @enderror">
          <div class="invalid-feedback">Nieprawidłowy godzina!</div>
      </div>
<!-- test test test -->
      <input type="submit" value="Aktualizuj">
    </form>
    </div>

    </div>
    @include('shared.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>