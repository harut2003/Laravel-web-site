@extends('admin/layouts.app') 
@section('content')
<title>Edit Users</title> 
<div class="content-wrapper">
  <form class="userform" method="POST" action="{{ route('users_update') }}" s>@csrf
  	<label><b>Name</b></label>
    <input value="<?php echo $user['name'] ?>"  type="name" name="name" placeholder="Enter name">

    <label ><b>Role</b></label>
    <input value="<?php echo $user['role'] ?>" type="text" name="role" placeholder="Enter role">

    <label><b>Email address</b></label>
    <input value="<?php echo $user['email'] ?>"   type="email" name="email" placeholder="Enter email">
    <label><b>Enter Password</b></label>
    <input type="password" name="password" placeholder="Enter Password">
    <label>Remember me <input class="check" type="checkbox" name="checkbox"></label>
    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
    <button  type="Submit">Submit</button>  
  </form>
</div>
<!-- /.content-wrapper -->
<style type="text/css">
  .content-wrapper{
    padding: 15px;
  }
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
