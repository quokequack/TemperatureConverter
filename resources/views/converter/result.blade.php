<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
    <link rel='stylesheet' href='{{asset('css/result.css')}}' type='text/css'>
</head>
<body>
    <div class='container'>
        <h1>Temperature Converter</h1>
        <div class='instructions'>
            <h3>RESULT</h3><br/>
            <p>The result of conversion is {{$result}}</p>
        </div>
        <a class='btn'href='{{route("home")}}' title='back'><p>Go Back</p></a>
        <p class='credit'> made by quokequack</p>
    </div>
</body>
</html>