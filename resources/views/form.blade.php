@extends('layout.mainlayout')

@section('title', 'Order')

@section('content')

<div class="container text-light ">
    <div class="row">
        <div class="col" style="color:black">
            <form action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>                
                <div class="form-group">
                    <label for="notelp">No.Telp :</label>
                    <input type="number" class="form-control" id="notelp" name="notelp" required>
                </div>
                <div class="form-group">
                    <label for="idnumber">ID Card :</label>
                    <input type="file" class="form-control" id="idnumber" name="idnumber" accept="image/*" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary mb-5 me-1"><i class="fa-solid fa-check me-1"></i>Submit</button>
                <a href="{{ URL::previous() }}" class="btn btn-danger mb-5"> <i class="fas fa-arrow-left"></i> Go Back</a>
            </form>
        </div>
    </div>
</div>
@endsection