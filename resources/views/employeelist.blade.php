@extends('app')
@section('content')
    <div style="text-align: center; font-family: 'Oswald'">
  <h1> User List </h1>
    </div>
<div class="col-xs-12 col-md-12">
<table class="table table-striped table-bordered">
    <tr>
      <th>Name</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Action</th>
    </tr>
    @foreach($data as $d)
    <form action="{{ url('/deleteemployee/' . $d->id) }}" method="POST">
    {{ csrf_field() }} 
    <tr>
      <td> {{ $d -> Name }} </td>
      <td> {{ $d -> PhoneNumber }}  </td>
      <td> {{ $d -> Address }}  </td>
      <td>
        <button type="submit" class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span> Delete </button>
      </td>
    </tr>
    </form>
  @endforeach
</table>
</div>
@endsection