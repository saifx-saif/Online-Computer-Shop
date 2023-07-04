<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Saifx Computers</title>
    <link rel="stylesheet"type="text/css" href="{{ asset('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="header">
    <div class="container">
      <div class="navbar" style="height: 140px;" >
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{ asset('/images/logo.png') }}" width="150px"></a>
        </div>
        <nav>
         <ul id="Menuitems">
           <li ><a href="{{route('home')}}">Home</a></li>
           <li><a id="product" href="{{route('product')}}">Products</a></li>
           <li><a href="{{route('contact')}}">Contact</a></li>
           <li><a href="{{route('login')}}">Log Out</a></li>
         </ul>
        </nav>
        <a href="{{route('cart')}}"><img src="{{ asset('/images/cart.png') }}" width="30px",height="30px"></a>
        <img src="{{ asset('/images/menu.png') }}" class="menu-icon" onclick="menutoggle()">
      </div>
    <div class="row">
      <div class="col-2">
          <h1>MACBOOK M2 PRO</h1>
          <br/>
          <p>
            The 14 and 16-inch MacBook Pros, with M2 Pro <br>and M2 Max offer incredible power and long-lasting battery life.
          </p>
          <a href="{{route('product')}}" class="btn">Explore now &#8594</a>
      </div>
      <div class="col-2">
          <img src="{{ asset('/images/homepage.png') }}">
      </div>
    </div>
    </div>
   </div>


<!--Feature Products-->
<div class="small_container">
  <h2 class="title">Featured Products</h2>
  <div class="row">
  @foreach($data as $product)
  <div class="col-4">
      <a href="#"><img src="/productimage/{{$product->image}}" ></a>
      <a href="#"><h4>{{$product->title}}</h4></a>
      <p style="color: black;">{{$product->description}}</p>
      <p style="color: black;">{{$product->price}} $</p>
    </div> 
@endforeach

</div>

  <h2 class="title">Latest Products</h2>
  <div class="row">
  @foreach($data as $product)
  <div class="col-4">
      <a href="#"><img src="/productimage/{{$product->image}}" ></a>
      <a href="#"><h4>{{$product->title}}</h4></a>
      <p style="color: black;">{{$product->description}}</p>
      <p style="color: black;">{{$product->price}} $</p>
    </div> 
@endforeach
</div>
</div>


<!--Offer-->
<div class="offer">
  <div class="small_container">
    <div class="row">
      <div class="col-2">
        <img src="{{ asset('/images/homepage.png') }}" class="offer-img">
      </div>
      <div class="col-2">
        <p style="color:black">Exclusively Available on Saifx Computers</p>
        <h1 style="color:black">MACBOOK M2 PRO</h1>
       
        <a href="{{route('product')}}" class="btn">Buy Now &#8594;</a>
      </div>
    </div>
  </div>
</div>

<!--Testimonial-->
<div class="testimonial">
  <div class="small_container">
    <div class="row">
      <div class="col-3">
        <i class="fa fa-quote-left"></i>
        <p></p>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <img src="{{ asset('/images/p1.jpg') }}">
        <h3></h3>
      </div>
      <div class="col-3">
        <i class="fa fa-quote-left"></i>
        <p></p>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <img src="{{ asset('/images/p2.jpg') }}">
        <h3></h3>
      </div>
      <div class="col-3">
        <i class="fa fa-quote-left"></i>
        <p></p>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <img src="{{ asset('/images/p3.jpg') }}">
        <h3></h3>
      </div>
    </div>
  </div>
</div>



<!--Brands-->
  <div class="brands">
    <div class="small-container">
      <div class="row">
        <div class="col-5">
          <img src="{{ asset('/images/brand-1.png') }}">
        </div>
        <div class="col-5">
          <img src="{{ asset('/images/brand-2.png') }}">
        </div>
        <div class="col-5">
          <img src="{{ asset('/images/brand-3.png') }}">
        </div>
        <div class="col-5">
          <img src="{{ asset('/images/brand-4.png') }}">
        </div>
        <div class="col-5">
          <img src="{{ asset('/images/brand-5.png') }}">
        </div>
      </div>
    </div>
  </div>

<!--Footer-->

<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
        <h3>Download Our App</h3>
        <p>Download App for Android and ios mobile phone.</p>
        <div class="app-logo">
          <img src="{{ asset('/images/play-store.png') }}">
          <img src="{{ asset('/images/app-store.png') }}">
        </div>
      </div>
      <div class="footer-col-2">
        <img src="{{ asset('/images/logo.png') }}">
        <p>A mobile friendly online store opens your e-commerce business up to this whole new demographic.</p>
      </div>
      <div class="footer-col-3">
        <h3>Useful Links</h3>
        <ul>
          <li>Coupons</li>
          <li>Blog Post</li>
          <li>Return Policy</li>
          <li>Join Affiliate</li>
        </ul>
      </div>
      <div class="footer-col-4">
        <h3>Follow us</h3>
        <ul>
          <li>Facebook</li>
          <li>Twitter</li>
          <li>Instagram</li>
          <li>You Tube</li>
        </ul>
      </div>
    </div>
    <hr>
    <p class="copyright">Copyright 2023 - saifx computers</p>
  </div>
</div>


<!--js for toggle menu-->
<script>
  var Menuitems=document.getElementById("Menuitems");

  Menuitems.style.maxHeight = "0px";

  function menutoggle(){
    if(Menuitems.style.maxHeight == "0px")
    {
      Menuitems.style.maxHeight = "200px";
    }
    else{
      Menuitems.style.maxHeight = "0px";
    }
  }
</script>

  </body>
</html>