@extends('layout.mainlayout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between">
    <h4 class="">Cars</h4>
    <a href="{{ URL('/carform') }}" class="btn btn-success">New Data</a>
    </div>
    <div class="table-responsive">
<table class="table table-striped">
<thead>
  <tr>
    <th>No</th>
    <th>Image</th>
    <th>Model</th>
    <th>Price</th>
    <th>Year</th>
    <th>Passenger Count</th>
    <th>Manufaktur</th>
    <th>Tipe Bahan Bakar</th>
    <th>Luas Bagasi</th>
    <th>Option</th>
  </tr>
</thead>
<tbody>
    @foreach($car as $data)
  <tr>
    <td>{{$data->id}}</td>
    <td>{{$data->carimg}}</td>
    <td>{{$data->model}}</td>   
    <td>{{$data->price}}</td>
    <td>{{$data->year}}</td>
    <td>{{$data->passenger}}</td>
    <td>{{$data->manufaktur}}</td>   
    <td>{{$data->tipebbm}}</td>
    <td>{{$data->luasbagasi}}</td>
    <td>
        <button  type="button" class="btn btn-warning d-flex">Edit</button>
        <form action="{{ route('car.destroy', $data->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger d-flex">Delete<i class="fa-duotone fa-person fa-flash ms-1"></i></button>
        </form>
    </td>
  </tr>
  @endforeach
        </div>
    </table>
</div>
</div>
@endsection