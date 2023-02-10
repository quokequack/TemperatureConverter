<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="{{asset('css/converter.css')}}">
</head>
<body>
    <div class='container'>
        <h1>Temperature Converter</h1>
        <div class='instructions'>
            <h3>Instructions</h3>
            <p>This is a temperature conversor. You must put the temperature in celsius at the first field and then choose wich scale do you want to convert.<br/><br/>For example: 42 to Fahrenheit.</p>
        </div>
        <form class='form' method='get' action='{{route('temperature')}}'>
            <label for='temp' class='label'>Temperature in Celsius</label><br/>
            <input type='number' id='temp' name='temperature'required><br/>
            <label for='scale' class='label'>Scale</label><br/>
            <select id='scale' class='scale' name='scale' required>
                <option value='fahrenheit'>Fahrenheit</option>
                <option value='kelvin'>Kelvin</option>
            </select><br/>
            <button class='btn' type='submit'>Convert</button>
        </form>
    </div>
</body>
</html>