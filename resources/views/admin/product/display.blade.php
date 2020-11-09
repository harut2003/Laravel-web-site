@extends('style')

<title><?php echo $product['name'] ?></title>
   <body>
     <link rel="stylesheet" type="text/css" href="{{asset('css/display.css')}}">
@extends('header')
<div class="content-wrapper" action="{{ route('product_update') }}">
  <form method="POST"  style="padding: 25px; margin-top: 161px; margin-left: 400px;">@csrf
    <div class="continer">
      <div id="slideshow">
        <div class="slide-wrapper">
          <div class="slide"><img src="<?php echo $product['picture'] ?>"></div>
          <div class="slide"><img src="<?php echo $product['picture2'] ?>"></div>
          <div class="slide"><img src="<?php echo $product['picture3'] ?>"></div>
        </div>
      </div>
      <div class="data">
        <h1><?php echo $product['name'] ?></h1>
        <h3><?php echo $product['price'] ?>$</h3>
        <pre><?php echo $product['description'] ?></pre>
        <a href="#" class="w3-button w3-light-grey">BUY</a>
      </div>
    </div>
  </form>
</div>

@extends('footer')
   </body>


