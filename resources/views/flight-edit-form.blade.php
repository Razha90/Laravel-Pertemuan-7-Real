<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('flight.update', ['flight'=>1]) }}">
        @csrf
        @method('PUT')

        <label for="departures">Departure:</label>
        <input type="date" name="departures" id="departures" value="{{ $flight->departures }}">
        <br>
        <br>
        <label for="passengers">Passenger:</label>
        <input type="number" name="passengers" id="passengers" value="{{ $flight->passengers }}">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>