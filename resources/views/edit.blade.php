<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('home/update')}}" method="post">
    @csrf
    <input type="text" value="{{$data->title}}" name="name">
    @error("name") <h6>{{$message}}</h6> @enderror
    <input type="text"  value="{{$data->age}}"  name="age">
    @error("age") <h6>{{$message}}</h6> @enderror
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="submit">
</form>
</body>
</html>
