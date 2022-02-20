
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success')}}
    </div>
@endif

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">age</th>
        <th scope="col">update</th>
        <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($res as $category)

    <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->title}}</td>
        <td>{{$category->age}}</td>
        <td><a href="{{url("home/edit/$category->id")}}">update</a></td>
        <td><a href="{{url("home/delete/$category->id")}}">delete</a></td>
    </tr>
    @endforeach

    </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
