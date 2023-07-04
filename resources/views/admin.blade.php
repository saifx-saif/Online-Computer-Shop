<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>SAIFx Computers</title>
    <link rel="stylesheet"type="text/css" href="{{ asset('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        label{
            display:inline-block;
            width:200px;
        }
    </style>
  </head>
  <body>
    <div class="header">
    <div class="container">
      <div class="navbar" style="height: 150px;" >
      <div >
         <h1>ADMIN PANNEL</h1>
        </div>
        <nav>
        <ul id="Menuitems">
        <li ><a href="{{route('admin')}}">Add Product</a></li>
           <li ><a href="{{route('adminProduct')}}">Product</a></li>
           <li><a href="{{route('login')}}">Log Out</a></li>
         </ul>
        </nav>
      </div>
    </div>
   </div>
   <form  action="{{url('uploadProduct')}}" method="post" enctype="multipart/form-data" style="padding-left:700px;padding-right:500px;padding-bottom:20px;">
  @csrf
   <h1 style="text-align: center;">Add Products</h1>
 
  <div style="padding:25px;">
    <label>Product Title</label>
    <input type="text" name="title" placeholder="Give a product title" required="" style="height: 30px;width=20px";>
  </div>
  <div style="padding:25px;">
    <label>Price
    </label>
    <input type="number" name="price" placeholder="Give a price" required="" style="height: 30px;width=20px";>
  </div>
  <div style="padding:25px;">
    <label>Description</label>
    <input type="text" name="des" placeholder="Give a description" required="" style="height: 30px;width=20px";>
  </div>
  <div style="padding:25px;">
    <label>Quantity</label>
    <input type="number" name="quantity" placeholder="Give a description" required="" style="height: 30px;width=20px";>
  </div>
  <div style="padding:25px;">
    <input type="file" name="file" required="">
  </div>
<div style="padding:25px">
<button type="submit"class="btn">Upload</button>
</div>
    </form>

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