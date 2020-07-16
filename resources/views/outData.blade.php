<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<ul>


@foreach($data as $i)
<li>{{$i->Email}}</li>
<li>{{$i->Name}}</li>
<li>{{$i->Password}}</li>

<li><img src="{{ asset('uploads/Pics/' . $i->Image) }}" alt="image"></li>
<li><a href="">Edit</a></li>
<li><a href="">delete</a></li>
@endforeach

</ul>

 




</body>
</html>