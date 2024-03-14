<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <h2 class="title">コメント</h2>
            <div class='content'>
                <p>{{ $post->body }}</p>
            </div>
            <a href="">{{ $post->team->name }}</a>
            <div class="edit"><a href="/posts/{{ $post->id }}/edit">編集</a></div>
            <h2>リプライ</h2>
            <div class='comments'>
                @foreach ($comments as $comment)
                    <div class='comment'>
                        <p class='body'>
                            <a href="/comments/{{ $comment->id }}">{{ $comment->body }}</a>
                        </p>
                        <form action="/comments/{{ $comment->id }}" id="form_{{ $comment->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deleteTeam({{ $comment->id }})">delete</button>
                        </form>
                    </div>
                @endforeach
            </div>
            <a href='/comments/create'>返信する</a>
            <div class='paginate'>
                {{ $comments->links() }}
            </div>
            <div class="footer">
                <a href="/">戻る</a> 
            </div>
            <script>
                function deleteComment(id) {
                    'use strict'
                    
                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </x-app-layout>
</html>