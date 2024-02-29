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
            <img src="{{ $team->image_url }}" alt="画像が読み込めません。"/>
        </div>
        <a href="/prefectures/{{ $team->prefecture->id }}">{{ $team->prefecture->name }}</a>
        <div class="edit"><a href="/teams/{{ $team->id }}/edit">編集</a></div>
        <h2>コメント</h2>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <p class='body'>
                        <a href="/posts/{{ $post->id }}">{{ $post->body }}</a>
                    </p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteTeam({{ $post->id }})">delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        <a href='/posts/create'>コメントする</a>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <div class="footer">
            <a href="/">戻る</a> 
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