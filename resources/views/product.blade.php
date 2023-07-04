<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>All Products - SAIFx Computers</title>
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
    </div>
   </div>


<div class="small_container">

    <div class="row row-2">
      <h2 style="margin-left: 80px;">All Products</h2>
      <select>
        <option>Default Sorting</option>
        <option>Sort by price</option>
        <option>Sort by popularity</option>
        <option>Sort by rating</option>
        <option>Sort by sale</option>
      </select>
    </div>




<!--Products-->

 <div class="row">
  @foreach($data as $product)
    <div class="col-4">
      <a href="#"><img src="/productimage/{{$product->image}}" ></a>
      <a href="#"><h4>{{$product->title}}</h4></a>
      <p style="color: black;">{{$product->description}}</p>
      <p style="color: black;">{{$product->price}} $</p>
      <a href="{{url('addcart',$product->id)}}" method="post"><button type="submit" class="btn">Add to Cart</button></a>
    </div> 
@endforeach
</div>
  <div class="page-btn">
    <span>1</span>
    <span>2</span>
    <span>3</span>
    <span>4</span>
    <span>&#8594;</span>
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