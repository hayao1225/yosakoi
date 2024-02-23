<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Teams</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $team->title }}
        </h1>
        <div class="content">
            <div class="content_team">
                <h3>本文</h3>
                <P>{{ $team->body }}</P>
            </div>
        </div>
        <div class="edit"><a href="/teams/{{ $team->id }}/edit"></a></div>
        <div class="footer">
            <a href="/">戻る</a> 
        </div>
    </body>
</html>