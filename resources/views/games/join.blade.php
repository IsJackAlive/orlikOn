<!doctype html>
<html lang="pl">
  
@include('shared.header')

  <body>
    @include('shared.nav')
    <div class="container">

    <div class="card d-flex row mt-4">
        <h3 class="card-header">Dołącz</h3>
        
        <div class="row row-cols-1 row-cols-md-2">
        <div class="col g-3">
          <form method="POST" action="{{ route('games.store') }}">
            <div class="form-group mb-2">
              <label for="height">Wysokość:</label> <br>
                <select id="height" name="height">
                  <option value="150">150 cm (111.0 zl/szt)</option>
                  <option value="140">140 cm (100.0 zl/szt)</option>
                  <option value="130">130 cm (90.0 zl/szt)</option>
                  <option value="120">120 cm (85.0 zl/szt)</option>
                 </select>
            </div>
          <input type="submit" value="Aktualizuj" class="button">
          <input type="button" value="Wróć" onclick="history.back()" class="button">
          </form>
        </div>
        <div class="col g-3">
          <h5 class="card-title">Informacje o grze:</h5>
          <p class="card-text"> game->name</p>
          <p class="card-text"> game->user->name</p>
          <p class="card-text"> player->rank</p>
        </div>      
      </div>
    </div>

    </div>
    @include('shared.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>