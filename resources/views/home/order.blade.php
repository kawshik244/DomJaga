<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    @include('home.css')


    <style type="text/css">
    .div_center {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
    }

    table {
        border: 2px solid black;
        text-align: center;
        width: 800px;
    }

    
    th{
        border: 2px solid skyblue;
        text-align: center;
        color: white;
        font: 20px;
        font-wight: bold;
        background-color: black;

    }

    td{
        border: 1px solid skyblue;
        padding: 15px;
        
    }
    .cart_value{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 70px;
        padding: 18px;
    }
    .order_deg
    {
        
        margin-top: -50px;
        padding-right: 100px;
    
    }
    label{
        font-size: 20px;
        
        display: inline-block;
        width: 150px;
        
    }
    .div_gap{
        padding: 20px;

    }

</style>
    
    
</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    
    <div class="div_center">
    
    <table>

                    <tr>
                        <th>Product Name</th>
                        
                        <th>Price</th>
                        
                        <th>Delivery Status</th>
                        <th>Image</th>
                        
                    </tr>





                    @foreach($order as $order)



                    <tr>
                        <td>{{$order->product->title}}</td>
                        <td>{{$order->product->price}}</td>
                        <td>{{$order->status}}</td>
                        <td><img width="150" src="/products/{{$order->product->image}}"></td>
                



                    </tr>

                  
                    @endforeach







                    </table>
</div>



</div>



@include('home.footer')
</body>
</html>