<!doctype html>
<html lang="pl">
  
@include('shared.header')

  <body>
    @include('shared.nav')
    <div class="container">

    <div class="card d-flex row mt-4">
        <h3 class="card-header">{{ $game->name }} ({{ $game->date }})</h3>

        <div class="row row-cols-1 row-cols-md-2">
        <div class="col g-5">
            <a class="card-title pitch-title" href="{{ route('pitches.show', $game->pitch->id) }}">{{ $game->pitch->name }}</a>
            <p class="card-text">rezerwacja od: {{ $game->hour_start }} do: {{ $game->hour_end }}</p>
            <p class="card-text">{{ $game->description }}</p>

            <!-- TODO: TRUST RATE 
                <div class="col">
                <p id="todo">Poziom zaufania: player->rank</p>
            </div> -->
            <div class="col">
            <form method="POST" action="#" class="f-add">
                <div class="form-group mb-2">
                    <label for="status">Status</label>
                    <select id="status" name="status">
                        <option value="gra">Gram</option>
                        <option value="rezerwowy">Rezerwowy</option>
                        <option value="nie przyjdę">Nie przyjdę</option>
                    </select>
                </div>
            </form>
            </div>
                        
            <button class="button" onclick="showInfo()">Info</button>
            <a class="button" type="submit">Dołącz</a>
            <a class="button" href="{{ route('games.edit', $game) }}">Edytuj</a>
            <input type="button" value="Wróć" onclick="history.back()" class="button">

            <div id="hidden" class="more" style="display: none;">
                <p class="card-subtitle mb-2">Mecz utworzorzył: {{ $game->user->name }}, Telefon: {{ $game->user->phone }}</p>
                <p class="card-subtitle mb-2">Ilość graczy: {{ $game->max_players }}</p>
            </div>
            <div class="col g-3">
        </div>
        </div>
        <div class="col g-3">
            @include('shared.game-table')
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