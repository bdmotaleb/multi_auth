<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Dashboard</title>
</head>
<body>
    <h1>Staff Dashboard {{ auth()->guard('staff')->user()->name }}</h1>
    <a href="{{ route('staff.create') }}">Create New Staff</a>
    <a href="{{ route('staff.logout') }}">Logout</a>
</body>
</html>
