<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome </h1>
    {{ count($name)}}
    @foreach($name as $nm)
    <h2>{{$nm}}</h2>
    @if($nm=='krishna')
        <p>hello {{$nm}}</p>
        @endif
    @endforeach
    
    <!-- {{2+2}} -->
    @for($i=0; $i< count($name); $i++)
    {{$name[$i]}}
    @endfor
    @php
    echo "hi"
    @endphp
</body>
</html>