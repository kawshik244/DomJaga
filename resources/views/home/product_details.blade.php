<!DOCTYPE html>
<html>

<head>
@include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')


    <style type="text/css">

        .div_center
        {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
            
        }

        .detail-box
        {
            padding: 15px;
            font-size: 18px;

        }



        </style>
    <!-- end header section -->
    <!-- slider section -->



    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">

      

        <div class=" col-md-12 ">
          <div class="box">
            
              <div class="div_center">
                <img width="400" src="/products/{{$data->image}}" alt="">
              </div>


              <div class="detail-box">
                <h3>
                 {{$data->title}}
                </h3>
                <h6>
                  Price
                  <span>
                    ${{$data->price}}
                  </span>
                </h6>
              </div>
              <div class="detail-box">
                <h6>Category : {{$data->category}}</h6>
                <h6>
                  Available Quantity
                  <span>
                    ${{$data->quantity}}
                  </span>
                </h6>
              </div>
              <div class="detail-box">
                
                  <p>
                    ${{$data->description}}
                  </p>
                
              </div>
              <div class="detail-box">
                
              <a href="{{url('add_cart',$data->id)}}" class="btn btn-primary">
                  Add to Cart
                </a>
                
              </div>
            
            


          </div>
        </div>

  

        
      </div>
      
    </div>
  </section>

  <!-- end shop section -->







  <!-- contact section -->

  
  <!-- end contact section -->

   

  <!-- info section -->

  @include('home.footer')

</body>

</html>