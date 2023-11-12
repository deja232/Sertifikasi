@extends('layout.mainlayout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between">
    <h4 class="">List of Order</h4>
    <a href="{{ URL('/form') }}" class="btn btn-success">New Data</a>
    </div>
    <div class="table-responsive">
<table class="table table-striped">
<thead>
  <tr>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No.Telp</th>
    <th>ID Card</th>
    <th>Option</th>
  </tr>
</thead>
<tbody>
    @foreach($customer as $data)
  <tr>
    <td>{{$data->nama}}</td>
    <td>{{$data->alamat}}</td>   
    <td>{{$data->notelp}}</td>
    <td><img src="{{asset($data->idnumber)}}" class="img-fluid"></td>
    <td>
    <form action="{{ route('customer.destroy', $data->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger d-flex">Delete<i class="fa-duotone fa-person fa-flash ms-1"></i></button>
        <a href="{{route('customer.edit', $data->id)}}"  class="btn btn-warning">Edit</a>
    </form>
    </td>
  </tr>
  @endforeach
        </div>
    </table>
</div>
</div>
@endsection