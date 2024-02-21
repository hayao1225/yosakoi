<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Team</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>チーム一覧</h1>
        <div class='teams'>
            @foreach ($teams as $team)
                <div class='team'>
                    <h2 class='title'>{{ $team->title }}</h2>
                    <p class='body'>{{ $team->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $teams->links() }} 
        </div>
    </body>
</html>