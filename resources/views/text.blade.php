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
     <p>categorie_id === {{ $text->categorie_id }}</p>
       <p>user_id == {{ $text->user_id }}</p>

@endforeach

    <form method="POST" action="/index">
    @csrf
    <div class="mb-3">
        <label for="heading" class="form-label">Заголовок</label>
        <input name="heading" type="text"  class="form-control" id="heading">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Текст</label>
        <textarea name="text" class="form-control" id="text"></textarea>
    </div>
    <div class="mb-3">
        <label for="categorie_id" class="form-label">categorie id</label>
        <textarea name="categorie_id" class="form-control" id="categorie_id"></textarea>
    </div>
       <div class="mb-3">
        <label for="user_id" class="form-label">user id</label>
        <textarea name="user_id" class="form-control" id="user_id"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
</main>
<x-footer/>
    </body>
</html>
