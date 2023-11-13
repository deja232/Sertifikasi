<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('layout.customer', ['customer' => $customers]);
    }

    public function edit($id){
        $customers = Customer::findOrFail($id);
        return view('customeredit', ['customer' => $customers]);
    }

    public function update(Request $request, $id){
        $customers = Customer::findOrFail($id);
        $image = $request -> file('idnumber');
        if($image){
            Storage::delete($request->img);
            $customers->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'notelp' => $request->notelp,
                'idnumber' => $image->store('idnumber'),
            ]);
        }else{
            $customers->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'notelp' => $request->notelp,
            ]);
        }
        return redirect()-> route('customer.index');

    }

    public function store(Request $request){

        $image = $request->file('idnumber');

        $path = public_path('images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);

        $imagePath = 'images/' . $image->hashName();

        $request->idnumber->move($path, $image->hashName());

        Customer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'idnumber' => $imagePath,
        ]);

        return redirect()->route('customer.index');
    }
    public function destroy($id){
        $customers = Customer::findOrFail($id);
        $customers->delete();

        return redirect()-> route('customer.index');
    }

}
