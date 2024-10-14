<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items Update</title>
</head>

<body>
    <h1>Items Update</h1>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item->name }} - Updated: {{ $item->updated_at }}</li>
        @endforeach
    </ul>
</body>

</html>
