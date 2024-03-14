<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Team</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <h1 class="title">編集画面</h1>
            <div class="content">
                <form action="/teams/{{ $team->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class='content_name'>
                        <h2>名前</h2>
                        <input type='text' name='team[name]' value="{{ $team->name }}">
                        <p class="name_error" style="color:red">{{ $errors->first('team.name') }}</p>
                    </div>
                    <input type="submit" value="保存"/>
                </form>
            </div>
        </body>
    </x-app-layout>
</html>