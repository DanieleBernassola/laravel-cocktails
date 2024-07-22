<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocktails</title>
    @vite('resources/js/app.js')
</head>

<body>

    @include('shared.header')
    @yield('content')
    @include('shared.footer')

</body>

</html>
