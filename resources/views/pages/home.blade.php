<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Demo</title>
    <link rel="stylesheet" href="{{('css/bootstrap.css')}}">
    <style>
        li {
            margin-left:5%;
        }
    </style>
</head>
<body>
    <h1>Movies 2020</h1>
    Home | <a href="{{url('/genres')}}">Genres</a>  | <a href="{{url('/recommended')}}">Most Recommended</a> 
    <br>
    <br>
    <div>
    Movies, or films, are a type of visual communication which uses moving pictures and sound to tell stories or teach people something. Most people watch (view) movies as a type of entertainment or a way to have fun. For some people, fun movies can mean movies that make them laugh, while for others it can mean movies that make them cry, or feel afraid
    The reason we love movies is because filmmakers cater to our fears, desires, and necessities. Film can be used as a distraction from our everyday life, a wake up call to our society, or comic relief when life seems to just be too serious.
    </div>
</body>
</html>