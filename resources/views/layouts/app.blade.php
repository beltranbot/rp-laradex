<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>LaraDex - @yield('title')</title>
</head>
<body>
    <div class="nav navbar navbar-dark bg-primary">
        <a href="#" class="navbar-brand">LaraDex</a>
    </div>

    @include('common.errors')
    @include('common.session-message')

    <div class="container">
        @yield('content')
    </div>
</body>
</html>