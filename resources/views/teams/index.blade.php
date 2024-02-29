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
                    <h2 class='name'>
                        <a href="/teams/{{ $team->id }}">{{ $team->name }}</a>
                    </h2>
                    <form action="/teams/{{ $team->id }}" id="form_{{ $team->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteTeam({{ $team->id }})">delete</button>
                    </form>
                </div>
                <a href="/prefectures/{{ $team->prefecture->id }}">{{ $team->prefecture->name }}</a>
            @endforeach
        </div>
        <a href='/teams/create'>create</a>
        <div class='paginate'>
            {{ $teams->links() }} 
        </div>
        <script>
            function deleteTeam(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>