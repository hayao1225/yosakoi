<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Comment</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <h1 class="title">編集画面</h1>
            <div class="content">
                <form action="/comments/{{ $comment->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class='content_body'>
                        <h2>本文</h2>
                        <input type='text' name='comment[body]' value="{{ $comment->body }}">
                    </div>
                    <input type="submit" value="保存"/>
                </form>
            </div>
        </body>
    </x-app-layout>
</html>