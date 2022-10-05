<!doctype html>
<html lang="pl">
  
@include('shared.header')

  <body>
    @include('shared.nav')
    <div class="container">

    <div class="card d-flex row mt-4">
        <h3 class="card-header">Szukaj boiska</h3>

        <div class="row row-cols-1 row-cols-md-2">
            <div class="col g-3">
            @forelse($pitches as $pitch)
                <div class="col g-3">
                    <div class="card">
                        <div class="card-body">
                        <a class="card-title pitch-title" href="{{ route('pitches.show', $pitch->id) }}">{{ $pitch->name }}</a>
                        <h6 class="card-subtitle mb-2">{{ $pitch->address }}</h6>
                        <p class="card-text">{{ $pitch->description }}</p>
                        <a href="{{ route('games.new', $pitch) }}" class="card-link button">Stwórz grę</a>
                    </div>
                    </div>
                </div>
            @empty
                <p>Brak dostępnych boisk.</p>
            @endforelse
            </div>
        </div>

        
    </div>

    </div>
    @include('shared.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>