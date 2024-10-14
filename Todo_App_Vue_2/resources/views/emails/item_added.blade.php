<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Hi,</p>
    <p>A new item has been added:</p>
    <ul>
        <li>Name: {{ $item->name }}</li>
        <li>Day of the Week: {{ $item->day_of_week }}</li>
        <li>Time of Day: {{ $item->time_of_day }}</li>
    </ul>
    <p>Regards,<br>{{ config('app.name') }}</p>
</body>

</html>
