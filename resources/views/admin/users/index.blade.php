@extends('admin/layouts.app') 
@section('content') 
<title>Users</title> 
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<div class="content-wrapper">
	<h1>All users</h1>
	<a class="create" href="{{ url('/admin/users/create/') }}">Create User</a>
  <table>
  	<tr>
  		<th>Name</th>
  		<th>Email</th>
      <th>Role</th>
  	</tr>
    <div class="users_">
      <?php foreach ($users as $key => $value) {?>
        <tr>
          <td><?php echo $value['name'] ?></td>
          <td><?php echo $value['email'] ?></td>
          <td><?php echo $value['role'] ?></td>
          <td class="edit"><a href="{{ url('/admin/users/edit/') }}/<?php echo $value['id'] ?>">Edit</a></td>
          <td class="delete"><a href="{{ url('/admin/users/delete/') }}/<?php echo $value['id'] ?>">Delete</a></td>
        </tr>
      <?php } ?>
    </div>
  	
  </table>
</div>
<!-- /.content-wrapper -->


@endsection