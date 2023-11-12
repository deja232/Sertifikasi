@extends('layout.mainlayout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between">
    <h4 class="">Order</h4>
    <a href="{{ URL('/orderform') }}" class="btn btn-success">New Data</a>
    </div>
    <div class="table-responsive">
<table class="table table-striped">
<thead>
  <tr>
    <th>No</th>
    <th>Customer ID</th>
    <th>Vehicle ID</th>
    <th>Total Amount</th>
    <th>Option</th>
  </tr>
</thead>
<tbody>
    @foreach($orders as $order)
  <tr>
    <td>{{$loop->index+1}}</td>
    <td>{{$order->customer_id}}</td>
    <td>{{$order->vehicle_id}}</td>
    <td>{{$order->vehicle->price}}</td>
    <td>
        <button  type="button" class="btn btn-warning d-flex">Edit</button>
        <form action="{{ route('order.destroy', $order->id) }}" method="post">
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