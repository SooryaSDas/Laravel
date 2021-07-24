<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <a href="/"><li>Welcome</li></a>
        <a href="/index"><li>index</li></a>
        <a href="/contact"><li>contact</li></a>
        <a href="/about"><li>about</li></a>
    </ul>

    @yield("title")

    <div class="container">
        @yield("content")
    </div>

    <div class="content">
        @yield("cont")
    </div>
</body>
</html>