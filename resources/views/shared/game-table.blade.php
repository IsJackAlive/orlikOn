<div class="row row-cols-1 row-cols-md-2 g-4">
    <!-- blue table -->
            <table class="table table-primary table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Telefon</th>
                <th scope="col">Status</th>
                <!-- <th scope="col">TR</th> -->
              </tr>
            </thead>
            <tbody>
                <!-- {{ $p_counter = 0 }} -->
                @foreach($players as $player)
                @if ($player->status == 'gra')
                  <tr>
                    <th scope="row">{{ $p_counter = $p_counter+1 }}</th>
                    <td>{{ $player->user->name }}</td>
                    <td>{{ $player->user->phone }}</td>
                    <td>{{ $player->status }}</td>
                  </tr>
                  @continue
                @endif
                @endforeach
            </tbody>
    <!-- orange table -->
            <tbody class="table-warning">
              @foreach($players as $player)
                @if ($player->status == 'rezerwowy')
                  <tr>
                    <th scope="row">{{ $p_counter = $p_counter+1 }}</th>
                    <td>{{ $player->user->name }}</td>
                    <td>{{ $player->user->phone }}</td>
                    <td>{{ $player->status }}</td>
                  </tr>
                  @continue
                @endif
              @endforeach
            </tbody>
            
          <tbody class="table">
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
    <!-- red table -->
            <tbody class="table-danger">
              <!-- {{ $p_counter = 0 }} -->
              @foreach($players as $player)
                @if ($player->status == 'nie przyjdę')
                  <tr>
                    <th scope="row">{{ $p_counter = $p_counter+1 }}</th>
                    <td>{{ $player->user->name }}</td>
                    <td>{{ $player->user->phone }}</td>
                    <td>{{ $player->status }}</td>
                  </tr>
                  @continue
                @endif
              @endforeach
            </tbody>
            </table>
</div>