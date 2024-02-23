<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Teams</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>チーム一覧</h1>
        <div class='teams'>
            @foreach ($teams as $team)
                <div class='team'>
                    <h2 class='title'>
                        <a href="/teams/{{ $team->id }}">{{ $team->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
        <a href='/teams/create'>create</a>
        <div class='paginate'>
            {{ $teams->links() }} 
        </div>
    </body>
</html>