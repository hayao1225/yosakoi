<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Comment</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>返信</h1>
        <form action="/comments" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="body">
                <h2>本文</h2>
                <div class="post">
                    <h2>原文</h2>
                    <select body="comment[post_id]">
                        @foreach($posts as $post)
                            <option value="{{ $post->id }}">{{ $post->body }}</option>
                        @endforeach    
                    </select>
                </div>
                <input type="text" name="comment[body]" placeholder="返信" value="{{ old('comment.body') }}"/>
                <p class="body_error" style="color:red">{{ $errors->first('comment.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>