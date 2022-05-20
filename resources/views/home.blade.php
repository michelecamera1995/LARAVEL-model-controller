<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.app">
    <title>Movies</title>
</head>

<body>
    <div class="container">
        <h1>Movies</h1>
        @foreach($movies as $movie)
        <h2>{{movie['title']}}</h2>
        <p>{{movie['nationality']}}</p>
        <p>{{movie['date']}}</p>
        <p>{{movie['vote']}}</p>
        @endforeach
    </div>

</body>

</html>