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
        <h3 class="card-header">Nowa gra: {{ $pitch->name }}</h3>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col g-3">
                <form method="POST" action="{{ route('games.store') }}" class="f-add">
                <div class="form-group mb-2">
                    <label for="name" >Nazwa</label>
                    <input id="name" name="name" type="text"
                    class="@error('name') is-invalid @else is-valid @enderror new-form">
                    <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                </div>
                <div class="form-group mb-2">
                <p id="todo">Uwzględnij godziny innych gier</p>
                    <label for="hour_start">Start</label>
                    <input id="hour_start" name="hour_start" type="time" min="{{ $pitch->hour_open }}" max="{{ $pitch->hour_close }}"
                    class="@error('hour_start') is-invalid @else is-valid @enderror new-form">
                    <div class="invalid-feedback">Nieprawidłowa godzina!</div>
                </div>
                <div class="form-group mb-2">
                    <label for="hour_end">Koniec</label>
                    <input id="hour_end" name="hour_end" type="time" min="{{ $pitch->hour_open }}" max="{{ $pitch->hour_close }}"
                    class="@error('hour_end') is-invalid @else is-valid @enderror new-form">
                    <div class="invalid-feedback">Nieprawidłowa godzina!</div>
                </div>
                <div class="form-group mb-2">
                    <label for="date">Data</label>
                    <input id="date" name="date" type="date"
                    class="@error('date') is-invalid @else is-valid @enderror new-form">
                    <div class="invalid-feedback">Nieprawidłowa data!</div>
                </div>
                <div class="form-group mb-2">
                    <label for="description">Opis</label>
                    <input id="description" name="description" type="text"
                    class="@error('description') is-invalid @else is-valid @enderror new-form">
                    <div class="invalid-feedback">Nieprawidłowy opis!</div>
                </div>
                <div class="form-group mb-2">
                    <label for="max_players">Max graczy</label>
                    <input id="max_players" name="max_players" type="number" value="0" min="1"
                    class="@error('max_players') is-invalid @else is-valid @enderror new-form">
                    <div class="invalid-feedback">Nieprawidłowa liczba!</div>
                </div>

                <!-- TODO NIE MOZE TAK BYC TO NIEBEZPIECZNE -->
                <div id="todo"> 
                <input id="user_id" name="user_id" type="text" value="4">
                <input id="pitch_id" name="pitch_id" type="text" value="{{ $pitch->id }}">
                </div>
                <!--  -->

                <input type="submit" value="Aktualizuj" class="button">
                <input type="button" value="Wróć" onclick="history.back()" class="button">
                </form>
            </div>

            <div class="col g-3">
                <h3 id="todo">Dostępne godziny {{ $pitch->hour_open }} - {{ $pitch->hour_close }}</h3>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
    @include('shared.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>

<?php 
?>