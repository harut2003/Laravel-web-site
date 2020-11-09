@extends('style')

<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<title>Products</title>
@extends('header')

<div style="background-image: url(https://static3.bigstockphoto.com/0/4/1/large1500/140698202.jpg)"  class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">All <span class="w3-hide-small">PRODUCTS</span>
  </div>
</div>
<title>Products</title>
<div style="margin-left: 0px;" >
  <a  href="{{ url('/admin/product/create/') }}"><h3 style="margin-left: 30px;">Create Product</h3></a>
  <div class="continer">
            
        <?php foreach ($product as $key => $value) {
          ?>            <a href="{{ url('/admin/product/') }}/<?php echo $value['id'] ?>">
            <div class="subject">
                <div class="img"><img src='<?php echo $value['picture'] ?>'></div>
                <div class="text">

                  <h2><?php echo $value['name'] ?></h2>
                  </a>
                  <h5><?php echo $value['price'] ?>$</h5>
                  <pre><?php echo $value['description'] ?></pre>
                  
                </div>
                <div class="edit_del">
                  <p><a href="{{ url('/admin/product/edit/') }}/<?php echo $value['id'] ?>">Edit</a></p>
                  <p><a href="{{ url('/admin/product/delete/') }}/<?php echo $value['id'] ?>">Delete</a></p>
                </div>
            </div>
              <?php
        } ?>
        </div>
</div>


@extends('footer')
 


</body>
</html>
 






<!-- <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <title></title>
  <style type="text/css"></style>
</head>
<body>
  @extends('header')
  <div style="height: 100px;" class="bgimg-1">
  <div class="w3-display-middle" style="white-space:nowrap;">
    
  </div>
  <div class="content-wrapper">

  
  <a style="margin-left: 30px;" href="{{ url('/admin/product/create/') }}">Create Product</a>
  <table>

</div>
              <div class="continer">
            
        <?php //foreach ($product as $key => $value) {
          ?>            <a href="{{ url('/admin/product/') }}/<?php //echo $value['id'] ?>">
            <div class="subject">
              <img src='<?php //echo $value['picture'] ?>'>
              <div class="text">

                <h2><?php //echo $value['name'] ?></h2>
                </a>
                <h5><?php //echo $value['price'] ?>$</h5>
                <pre><?php //echo $value['description'] ?></pre>
                
              </div>
              <div class="edit_del">
                <p><a href="{{ url('/admin/product/edit/') }}/<?php //echo $value['id'] ?>">Edit</a></p>
                <p><a href="{{ url('/admin/product/delete/') }}/<?php //echo $value['id'] ?>">Delete</a></p>
              </div>
              
            </div>
          
          


        <?php
        //} ?>
        </div>

  </table>
</body>
</html> -->
