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
        <form action="/teams" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="name">
                <h2>Title</h2>
                <input type="text" name="team[title]" placeholder="チーム名" value="{{ old('team.title') }}"/>
                <p class="title_error" style="color:red">{{ $errors->first('team.title') }}</p>
            </div>
            <div class="image">
                <input type="file" name="team[image]">
                <p class="image_url_error" style="color:red">{{ $errors->first('team.image_url') }}</p>
            </div>
            <div class="prefecture">
                <h2>所在地</h2>
                <select name="team[prefecture_id]">
                    @foreach($prefectures as $prefecture)
                        <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>