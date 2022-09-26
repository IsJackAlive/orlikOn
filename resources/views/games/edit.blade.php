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
        <h3 class="card-header">Edytuj grę</h3>
        <!--  TODO: UWZGLĘDNIJ GODZINY OTWARCIA -->
        <h3 id="todo">GODZINY OTWARCIA {{ $game->pitch->hour_open }} - {{ $game->pitch->hour_close }}</h3>

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="row row-cols-1 row-cols-md-2">
        <div class="col g-3">
          <form method="POST" action="{{ route('games.update', $game->id) }}" class="f-add">
          <div class="form-group mb-2">
                    <label for="name">Nazwa</label>
                    <input id="name" name="name" type="text" value="{{ $game->name }}"
                    class="@error('name') is-invalid @else is-valid @enderror new-form">
                    <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                </div>
                <div class="form-group mb-2">
                    <label for="hour_start">Start</label>
                    <input id="hour_start" name="hour_start" type="time" min="09:00" max="18:00" value="{{ $game->hour_start }}"
                    class="@error('hour_start') is-invalid @else is-valid @enderror new-form">
                    <div class="invalid-feedback">Nieprawidłowa godzina!</div>
                </div>
                <div class="form-group mb-2">
                    <label for="hour_end">Koniec</label>
                    <input id="hour_end" name="hour_end" type="time" min="09:00" max="18:00" value="{{ $game->hour_end }}"
                    class="@error('hour_end') is-invalid @else is-valid @enderror new-form">
                    <div class="invalid-feedback">Nieprawidłowa godzina!</div>
                </div>
                <div class="form-group mb-2">
                    <label for="date">Data</label>
                    <input id="date" name="date" type="date" value="{{ $game->date }}"
                    class="@error('date') is-invalid @else is-valid @enderror new-form">
                    <div class="invalid-feedback">Nieprawidłowa data!</div>
                </div>
                <div class="form-group mb-2">
                    <label for="description">Opis</label>
                    <input id="description" name="description" type="text" value="{{ $game->description }}"
                    class="@error('description') is-invalid @else is-valid @enderror new-form">
                    <div class="invalid-feedback">Nieprawidłowy opis!</div>
                </div>
                <div class="form-group mb-2">
                    <label for="max_players">Max graczy</label>
                    <input id="max_players" name="max_players" type="number" min="1" value="{{ $game->max_players }}"
                    class="@error('max_players') is-invalid @else is-valid @enderror new-form">
                    <div class="invalid-feedback">Nieprawidłowa liczba!</div>
                </div>

            <input type="submit" value="Aktualizuj" class="button">
            <input type="button" value="Usuń" class="button">
            <input type="button" value="Wróć" onclick="history.back()" class="button">
          </form>
          <form method="POST" action="{{ route('games.destroy', $game->id) }}">
            <!-- @csrf -->
            @method('DELETE')
            <button type="submit">Usuń</button>
          </form>
        </div>
        <div class="col g-3">
          <h5 class="card-title">Edytujesz:</h5>
          <p class="card-text">Nazwa: {{ $game->name }}</p>
          <p class="card-text">Boisko: {{ $game->pitch->name }}</p>
          <p class="card-text">Godziny: {{ $game->hour_start }} - {{ $game->hour_end }}</p>
          <p class="card-text">Data: {{ $game->date }}</p>
          <p class="card-text">Opis: {{ $game->description }}</p>
          <p class="card-text">Max graczy : {{ $game->max_players }}</p>
        </div>
      </div>
    </div>

    </div>
    @include('shared.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>