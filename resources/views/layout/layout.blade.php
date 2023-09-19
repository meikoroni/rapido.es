<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env ('APP_NAME')}} </title>
    @vite (['resources/sass/app.scss',
                'resources/js/app.js'], 'resources/css/app.css')
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" />

</head>

<body>

    <main>
@yield('content')
    </main>

</body>

</html>
