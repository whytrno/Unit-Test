<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store') }}" method="POST">
        <input type="text" name="name">
        <input type="text" name="description">
        <button type="submit" name="Create Task">Submit</button>
    </form>
</body>
</html>