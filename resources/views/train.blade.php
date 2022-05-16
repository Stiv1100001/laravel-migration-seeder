<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Trains</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <main class="container py-5">
        <h1 class=" fst-italic mb-3">Laravel Trains</h1>
        <div class="row">
            @foreach ($trains as $train)
            <div class="col-12 mb-3">
                <div class="border border-2 border-dark rounded-2 p-2">
                    <h2>{{ $train->codice_treno }}: {{ $train->stazione_di_partenza }} -> {{ $train->stazione_di_arrivo
                        }}</h2>
                    <h5>{{ $train->azienda}}, {{ $train->orario_di_partenza }}/{{ $train->orario_di_arrivo }}</h5>
                    <h6>Carrozze: {{ $train->numero_carrozze }}</h6>
                    <h6>In orario: {{ $train->in_orario ? "Sì" : "No"}}</h6>
                </div>
            </div>
            @endforeach
            <div class="col-12">
                {{ $trains->links() }}
            </div>
        </div>
    </main>
</body>

</html>
