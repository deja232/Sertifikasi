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
        // $form = DB::table('customers')->get();
        // return view('layout.customer',['customer' => $form]);
    }

    public function edit($customerID){
        $customers = Customer::findOrFail($customerID);
        return view('customeredit', ['customer' => $customers]);
    }

    public function update(Request $request, $customerID){
        $customers = Customer::findOrFail($customerID);
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

        $image=$request->file('idnumber');
        $image-> StoreAs('public/storage', $image->hashName());

        Customer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'idnumber' => $image->hashName(),
        ]);

        return redirect()->route('customer.index');
    }
    public function destroy($customerID){
        $customers=Customer::findOrFail($customerID);
        $customers->delete();

        return redirect()-> route('customer.index');
    }

}
