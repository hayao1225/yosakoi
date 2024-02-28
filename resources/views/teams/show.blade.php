<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Teams</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="name">
            {{ $team->name }}
        </h1>
        <div>
            <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
        </div>
        <div class="edit"><a href="/teams/{{ $team->id }}/edit"></a></div>
        <div class="footer">
            <a href="/">戻る</a> 
        </div>
    </body>
</html>