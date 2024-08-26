<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoLocation</title>
</head>
<body>
<h1>記事一覧</h1>
    @foreach($articles as $article)
        <li>
            {{ $article->title->value() }}<br>
        </li>
    @endforeach
</body>
</html>