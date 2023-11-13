@extends('layout.mainlayout')

@section('title', 'Order')

@section('content')

    <div class="container text-light ">
        <div class="row">
            <div class="col" style="color:black">
                <form action="{{ route('vehicle.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for ="type">Type:</label>
                        <br>
                        <select name="type" class="form-select" id="type" required>>
                            <option value="" selected disabled>Pilih Jenis Kendaraan</option>
                            <option value="car">Car</option>
                            <option value="motor">Motor</option>
                            <option value="truck">Truck</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="model">Model :</label>
                        <input type="text" class="form-control" id="model" name="model" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price :</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="year">Year :</label>
                        <input type="number" class="form-control" id="year" name="year" required>
                    </div>
                    <div class="form-group">
                        <label for="passenger">Passenger Count :</label>
                        <input type="number" class="form-control" id="passenger" name="passenger" required>
                    </div>
                    <div class="form-group">
                        <label for="manufaktur">Manufaktur :</label>
                        <input type="text" class="form-control" id="manufaktur" name="manufaktur" required>
                    </div>
                    <div id="car">
                        <div class="form-group">
                            <label for="tipebbm">Tipe Bahan Bakar :</label>
                            <input type="text" class="form-control" id="tipebbm" name="tipebbm">
                        </div>
                        <div class="form-group">
                            <label for="luasbagasi">Luas Bagasi :</label>
                            <input type="number" class="form-control" id="luasbagasi" name="luasbagasi">
                        </div>
                    </div>
                    <div id="motor">
                        <div class="form-group">
                            <label for="kapasitasbbm">Kapasitas Bahan Bakar :</label>
                            <input type="text" class="form-control" id="kapasitasbbm" name="kapasitasbbm">
                        </div>
                        <div class="form-group">
                            <label for="luasbagasi">Luas Bagasi :</label>
                            <input type="number" class="form-control" id="luasbagasi" name="luasbagasi">
                        </div>
                    </div>
                    <div id="truck">
                        <div class="form-group">
                            <label for="wheelcount">Wheel Count:</label>
                            <input type="text" class="form-control" id="wheelcount" name="wheelcount">
                        </div>
                        <div class="form-group">
                            <label for="cargoarea">Cargo Area :</label>
                            <input type="number" class="form-control" id="cargoarea" name="cargoarea">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mb-5 me-1"><i
                            class="fa-solid fa-check me-1"></i>Submit</button>
                    <a href="{{ URL::previous() }}" class="btn btn-danger mb-5"> <i class="fas fa-arrow-left"></i> Go
                        Back</a>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var type = $('#type');
            var car = $('#car');
            var truck = $('#truck');
            var motorcycle = $('#motor');

            type.change(function() {
                // Hide all additional fields initially
                car.addClass('d-none');
                truck.addClass('d-none');
                motorcycle.addClass('d-none');

                // Show additional fields based on the selected vehicle type
                if (type.val() === 'car') {
                    car.removeClass('d-none');
                } else if (type.val() === 'truck') {
                    truck.removeClass('d-none');
                } else if (type.val() === 'motor') {
                    motorcycle.removeClass('d-none');
                }
            });
        });
    </script>
@endsection
