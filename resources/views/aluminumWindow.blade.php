<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KiloAcademy | WindowMaker</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("css/style.css") }}">

</head>
<body class="body">
<div class="content-wrapper">
    <div class="title">
        <h1>KiloAcademy Design Patterns Task</h1>
        <h4>Window Maker Example</h4>
    </div>

    <div class="card-wrapper">
        <div class="content">
            <div class="go-back-link"><a href="{{ route('home.page')  }}">&larr; Go back</a></div>

            <h4>This is a <span>{{ $windowColor }}</span>  <span>{{ $windowType }}</span> made by <span>{{ $windowMaker }}</span></h4>
        </div>
    </div>
    <div><p>Task was completed using Creational Design Patterns - Abstract Factory </p></div>
</div>
</body>
</html>
