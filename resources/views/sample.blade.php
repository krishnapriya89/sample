<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="postsum " method="POST">
        @csrf
        <input type="text" name="text1" id="" placeholder="enter first number"> <br>
        <input type="text" name="tx2" id="" placeholder="enter second number"><br>
        <button type="submit">submit</button> 
        {{ isset($sum )? $sum : ''}}
    </form>


</body>

</html>