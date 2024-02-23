<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Team</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>チーム名</h1>
        <form action="/teams" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="team[title]" placeholder="チーム名" value="{{ old('team.title') }}"/>
                <p class="title_error" style="color:red">{{ $errors->first('team.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="team[body]" placeholder="かっこいいチーム">{{ old('team.body') }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('team.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>