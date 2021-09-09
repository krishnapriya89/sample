<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new sample</title>
</head>

<body>
    <form action="gama" method="POST">
        @csrf
        <input type="text" name="tnum1" placeholder="enter first number"><br>
        <input type="text" name="tnum2" placeholder="enter second number"><br>
        <button type="submit">add</button>
        {{isset($data) ? $data : ''}}
    </form>
</body>

</html>