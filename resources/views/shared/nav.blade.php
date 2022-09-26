<nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
          <a class="navbar-brand nav nav-logo" href="{{ route('games.index') }}">orlikOn</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link nav" aria-current="page" href="{{ route('games.index') }}">Strona główna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav" href="{{ route('pitches.search') }}">Boiska</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>