<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Comments</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h2 class="title">返信</h2>
        <div class='content'>
            <p>{{ $comment->body }}</p>
        </div>
        <div class="edit"><a href="/comments/{{ $comment->id }}/edit">編集</a></div>
        <div class="footer">
            <a href="/">戻る</a> 
        </div>
    </body>
</html>