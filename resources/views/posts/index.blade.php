<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>　ここがひらけています！！！！！！！！</h1>
        <a href='/posts/create'>createだよよよよよy</a>
        <div class='posts'>
            
            title   body
            title2  body2
            title3  body3
            
            
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href='/posts/'>{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        
    </body>
</html>