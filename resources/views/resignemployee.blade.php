@extends('app')
@section('content')
    <div style="text-align: center; font-family: 'Oswald'">
  <h1> Resigned Employee </h1>
    </div>
<div class="col-xs-12 col-md-12">
<table class="table table-striped table-bordered">
    <tr>
      <th>Name</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Email Address</th>
      <th>Company Name</th>
      <th>Resignation Reason</th>
      <th>Submit Reason</th>
    </tr>
    @foreach($data as $d)
    <tr>
      <td> {{ $d -> Name }} </td>
      <td> {{ $d -> PhoneNumber }}  </td>
      <td> {{ $d -> Address }}  </td>
      <td> {{ $d -> EmailAddress }}  </td>
      <td> {{ $d -> CompanyName }}  </td>
      <td> {{ $d -> ResignationReason }}</td>
      <td>
      <form action="/createresign" method="POST">
      {{ csrf_field() }} 
      <div class="form-group">
        <input type="hidden" name="id" value="{{ $d -> id }}">
        <label for="InputReason">Resignation Reason : </label>
        <input type="text" class="form-control" placeholder="Reason" name="resign">
        <input type="submit" value="submit">
      </div>
      </td>
    </tr>
    </form>
  @endforeach

</table>
  <a href="/employeeadd" class="btn btn-default"> Add Employee </a>
  <a href="/" class="btn btn-default"> Employee List </a>
</div>

@endsection

