<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>{{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
             <script src="https://cdn.tailwindcss.com"></script>
        @endif
    </head>
    <body >
      <x-header/>
    <main class="max-w-7xl mx-auto p-8">
     <p>{{ $texts }}</p>
 @foreach ($texts as $text)
    <h1> {{ $text->id }}</h1>
 <h2> {{ $text->heading }}</h2>
    <p>{{ $text->text }}</p>
 
  
@endforeach
</main>
<x-footer/>
    </body>
</html>
