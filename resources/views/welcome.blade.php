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

    <main class="bg-light py-5">
        <div class="container">

            <h1 class="text-center">Lista treni</h1>

            <div class="grid-box">
                @foreach ($trains as $train)

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">compagnia: {{ $train->azienda }}</h5>
                        <p class="card-text">in partenza da: {{ $train->stazione_di_partenza }}</p>
                        <p class="card-text">orario di partenza: {{ $train->orario_di_partenza }}</p>
                        <p class="card-text">arrivo a: {{ $train->stazione_di_arrivo }}</p>
                        <p class="card-text">orario di arrivo: {{ $train->orario_di_arrivo }}</p>
                        <p class="card-text">codice treno: {{ $train->codice_treno }}</p>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </main>

</body>

</html>