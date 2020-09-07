<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use Illuminate\Support\Facades\Validator;

class CustomersController extends Controller
{
    public function show()
    {
        return Customers::all();
    }
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),
            [
                'nama_customers' => 'required',
                'alamat' => 'required',
                'email' => 'required'
            ]
        );

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $simpan = Customers::create([
            'nama_customers' => $request->nama_customers,
            'alamat' => $request->alamat,
            'email' => $request->email
        ]);

        if($simpan)
        {
            return Response()->json(['status' => 1]);
        }
        else
        {
            return Response()->json(['status' => 0]);
        }
    }
    public function update($id, Request $request)
    {
        $validator=Validator::make($request->all(),
        [
            'nama_customers' =>'required',
            'alamat' => 'required',
            'email' => 'required'
        ]
        );

        if($validator->fails()) {
            return Response()->json($validator->errors());
        }

        $ubah = Customers::where('id_customers', $id)->update([
            'nama_customers' => $request->nama_customers,
            'alamat' => $request->alamat,
            'email' => $request->email
        ]);

        if($ubah) {
            return Response()->json(['status' => 1]);
        }
        else {
            return Response()->json(['status' => 0]);
        }
    }
}
