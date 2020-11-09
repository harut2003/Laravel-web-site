@extends('admin/layouts.app') 
@section('content')
<title>Create Users</title> 
<div style="padding: 15px;"class="content-wrapper">
  <form class="userform" method="POST" action="{{ route('users_store') }}">@csrf
  	<label><b>Name</b></label>
    <input type="text" name="name" placeholder="Enter name">

    <label><b>Role</b></label>
    <input   type="txt" name="role" placeholder="Enter role">

    <label ><b>Email address</b></label>
    <input   type="email" name="email" placeholder="Enter email">
    <label ><b>Enter Password</b></label>
    <input   type="password" name="password" placeholder="Enter Password">
    <label >Remember me <input class="check" type="checkbox" name="checkbox"></label>
    <button type="Submit">Submit</button>  
  </form>
</div>
<!-- /.content-wrapper -->

<style type="text/css">
    .userform{
        padding: 25px; 
        border-top: 3px solid aqua; 
        box-shadow: 0 1px 1px rgba(0,0,0,0.1); 
        display: inline-block;
    }
    label{
        margin-top: 20px;
    }
    .check{
      display: inline;
      width: auto;
      padding: 0px;
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
