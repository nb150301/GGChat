<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Laravel</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body class="antialiased">
<div id="app">
    <example-component></example-component>
    <script src="{{ mix('js/app.js') }}"></script>
</div>
</body>
</html>
