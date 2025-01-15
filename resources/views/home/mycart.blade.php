<!DOCTYPE html>
<html>

<head>
@include('home.css')

<style type="text/css">
    .div_deg {
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
        border: 2px solid black;
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
    <!-- end header section -->

  </div>
  <!-- end hero area -->
    <div class="div_deg">


        



            <table>

                <tr>
                    <th>Product Title</th>
                    
                    <th> Price</th>
                    
                    <th>Image</th>
                    <th>  Remove </th>
                    
                </tr>

                <?php $total = 0; ?>



                
                @foreach($cart as $cart)

            

                <tr>
                    <td>{{$cart->product->title}}</td>
                    <td>{{$cart->product->price}}</td>
                    <td><img width="150" src="/products/{{$cart->product->image}}"></td>
                    <td>
                    <a class="btn btn-danger" href="{{url('delete_cart', $cart->id)}}">Remove</a>
                </td>



                </tr>

                <?php $total = $total + $cart->product->price; ?>

                @endforeach







            </table>





        </div>


        <div class="cart_value">
            <h2>Total Price: ${{$total}}</h2>

        </div>
   
        <div class="oder_deg" style="display: flex; justify-content: center; align-items: center;">
            <form method="Post" action="{{url('confirm_order')}}">
                @csrf
                <div class="div_gap">
                    <label>Receiver Name</label>
                    <input type="text" name="name" value="{{Auth::user()->name}}">
                </div>
                <div class="div_gap">
                    <label>Receiver Address</label>
                    <textarea  name="address" >{{Auth::user()->address}}</textarea>
                </div>
                <div class="div_gap">
                    <label>Receiver Phone</label>
                    <input type="text" name="phone" value="{{Auth::user()->phone}}">
                </div>
                <div class="div_gap">
                    
                    <input class="btn btn-primary" type="submit" value="Cash On Delivery">
                    <a class="btn btn-success" href="{{url('stripe',$total)}}">Pay With Card</a>
                </div>






            </form>

            </div>  

  @include('home.footer')

</body>

</html>