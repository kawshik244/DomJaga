<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<body>
    <center>
        <h3> Customer Name : {{$data->name}}</h3>
        <h3> Customer Address : {{$data->rec_address}}</h3>
        <h3> Customer Phone : {{$data->phone}}</h3>

        <h2> Product Title : {{$data->product->title}}</h2>
        <h2> Product Price : {{$data->product->price}}</h2>

        <img src="products/{{$data->product->image}}" style="width: 150px;">
    </center>
</body>
</html>