<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="af" method="post">
        @csrf
        <input type="text" placeholder="username" name="username"><br>
        <input type="text" placeholder="fullname" name="fullname"><br>
        <button type="submit">submit</button>
    </form>
    <table border="1">
        
        <tr>
            <th>username</th>
            <th>fullname</th>
        </tr>
        @foreach($data as $var)
        <tr>
            <td>{{$var->username}}</td>
            <td>{{$var->fullname}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>