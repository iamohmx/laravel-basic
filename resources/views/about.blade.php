<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About:Page</title>
</head>
<body>
    <h1>Welcome to mysite</h1>
    <p>{{ $address }}</p>
    <p>{{ $tel }}</p>
    <p>{{ $error }}</p>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ route('member') }}">Member</a>
    <a href="{{ route('admin') }}">Admin</a>
    <a href="{{ route('about') }}">About</a>
</body>
</html>