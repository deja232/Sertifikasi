<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function index(){
        $vehi = Vehicle::all();
        return view('vehicle', ['vehicle' => $vehi]);
    }

    public function create(){

    }

    public function store(Request $request){
        // dd($request->model);
        Vehicle::create([
            // 'carimg' => $request->carimg,
            'model' => $request->model,
            'year' => $request->year,
            'price' => $request->price,
            'passenger' => $request->passenger,
            'manufaktur' => $request->manufaktur,
            'tipebbm' => $request->tipebbm,
            'kapasitasbbm' => $request->kapasitasbbm,
            'wheelcount' => $request->wheelcount,
            'luasbagasi' => $request->luasbagasi,
            'cargoarea' => $request->cargoarea,
            'type' => $request->type,
        ]);
  
        return redirect()->route('vehicle.index');
    }
    public function destroy($id){
        $vehi=Vehicle::findOrFail($id);
        $vehi->delete();

        return redirect()-> route('vehicle.index');
    }

}
