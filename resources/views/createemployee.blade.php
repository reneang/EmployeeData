@extends('app')
@section('content')
<div style="text-align: center; font-family: 'Oswald', sans-serif;">
  <h1> Add User </h1>
</div>
<div class="col-xs-12 col-md-offset-2 col-md-8">
  <div class="container-fluid">
    <form action="/createemployee" method="POST">
    {{ csrf_field() }} 
      <div class="form-group">
        <label for="InputName">Name : </label>
        <input type="text" class="form-control" placeholder="Name" name="name">
      </div>
      <div class="form-group">
        <label for="InputAddress">Address : </label>
        <input type="text" class="form-control" placeholder="Address" name="address">
      </div>
      <div class="form-group">
        <label for="InputNumber">Phone Number : </label>
        <input type="number" class="form-control" placeholder="Phone Number" name="number">
      </div>
    <button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Data</button>
    </form>
  </div>
</div>
@endsection