<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    @php
        $user = "admin";
        $arr = array('Home', 'Member', 'About', 'Contact');
    @endphp

    @if ($user === "admin")
        <h1>Welcome, {{ $user }} </h1>
    @endif


    @foreach ($arr as $menu)
        <a href="">{{ $menu }}</a>
    @endforeach
</body>
</html>