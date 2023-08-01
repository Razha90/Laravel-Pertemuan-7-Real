<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="d-flex">
        @foreach ($flights as $flight)
        {{ $flight->departures}} <br>
        @endforeach
    </div>
    @if (session('status'))
        <div class='alert alert-success' role="alert">
            {{ session('status') }}
        </div>
    @endif
</body>

</html>