@extends('admin/layouts.app')
@section('content')  
<title>Create Products</title>
<div style="padding: 15px;"class="content-wrapper">
  <form class="productform" method="POST" action="{{ route('product_store') }}">@csrf
  	<label><b>Name</b></label>
    <input  type="text" name="name" placeholder="Enter name">

    <label><b>Price</b></label>
    <input   type="text" name="price" placeholder="Enter price">
    <label><b>Description</b></label>
    <textarea rows="10" cols="45"   type="text" name="description" placeholder="Enter description"></textarea>

    <label><b>Enter 1'st Picture</b></label>
    <input   placeholder="Enter Picture's url" type="text" name="picture">

    <label><b>Enter 2'nd Picture</b></label>
    <input  type="text" name="picture2" placeholder="Enter Picture's url">

    <label><b>Enter 3'rd Picture</b></label>
    <input  type="text" name="picture3" placeholder="Enter Picture's url">

    <button type="Submit">Submit</button>  
  </form>
</div>
<!-- /.content-wrapper -->

<style type="text/css">
    .productform{
        padding: 25px; 
        border-top: 3px solid aqua; 
        box-shadow: 0 1px 1px rgba(0,0,0,0.1); 
        display: inline-block;
    }
    label{
        margin-top: 20px;
    }
    input,textarea{
        width: 500px;
        padding: 5px; 
        padding-left: 10px; 
        display: list-item;
    }
    button{
        margin-top: 20px;
        display: list-item; 
        background-color: #3c8dbc; 
        color: white; 
        border: 0.5px solid #367fa9; 
        padding: 7px; 
        width: 100px; 
        border-radius: 3px;
    }
</style>

@endsection
