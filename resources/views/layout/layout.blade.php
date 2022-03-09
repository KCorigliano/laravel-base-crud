<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="d-flex justify-content-center align-items-center pt-4">
                    <div class="header-links me-2 p-2">
                        <a class="" href="/">Home</a>
                    </div>
                    <div class="header-links p-2">
                        <a href="show">Create</a>
                    </div>
                </div>
            </div>
        </header>
        @yield('main')
    </body>
</html>