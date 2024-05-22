<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <nav class="navbar">
            <div class="container mx-auto align-items-center" style="align-content: center">
              <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://www.figc.it/media/1181/frecciarossa.png" alt="Logo"  height="60" class="d-inline-block align-text-top">
                <h1 class="h1 m-0 ms-5">BOOTRAINS</h1>
              </a>
            </div>
          </nav>
    </header>

    <main class="bg-secondary">
        <div class="container p-2">
            <table class="table table-dark rounded">
                <thead class="table-danger">
                  <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Arrivo</th>
                    <th scope="col">Partenza</th>
                    <th scope="col">Orario Arrivo</th>
                    <th scope="col">Orario Partenza</th>
                    <th scope="col">Numero Treno</th>
                    <th scope="col">Cabine</th>
                    <th scope="col">Stato Treno</th>
                  </tr>
                </thead>
                <tbody>

                @foreach ($trains as $train )
                <tr>
                    <th scope="row">{{ $train->organization }}</th>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_id }}</td>
                    <td>{{ $train->cabs }}</td>
                    @if ($train->deleted == 1)
                        <td>Cancellato</td>
                    @elseif ($train->deleted == 0 && $train->in_time == 0)
                        <td>In Ritardo</td>
                    @elseif ($train->deleted == 0 && $train->in_time == 1)
                        <td>In Orario</td>
                    @endif
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </main>

</body>

</html>