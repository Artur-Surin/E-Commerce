<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
</head>
<body>

<div style="text-align: center;">

    <h3>Customer name :  {{$data->name}}</h3>

    <h3>Customer address :  {{$data->rec_address}}</h3>

    <h3>Phone :  {{$data->phone}}</h3>

    <h2>Product Title :  {{$data->product->title}}</h2>

    <h2>Price :  {{$data->product->price}}</h2>

    <img height="250" width="250" src="products/{{$data->product->image}}">

</div>

</body>
</html>
