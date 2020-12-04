<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributorController extends Controller
{
     public function index()
    {
        $data_distributor=\App\Distributor::all();
       
        
        return view('distributor.index',['data_distributor' => $data_distributor]);
    }
    public function create(Request $request)
    {
        $this->validate($request,[
            'kd_distributor'=>'required',
            'distributor'=>'required',
            'alamat'=>'required',
            'no_telepon'=>'required'
        ]);

        \App\Distributor::create($request->all());
        return redirect('/distributor')->with('sukses','data berhasil disimpan');
    }
    public function edit($id)
    {
        $distributor = \App\Distributor::find($id);
        
  
        return view('distributor/edit',['distributor' =>$distributor]);
    }
    public function update(Request $request,$id)
    {
        $distributor = \App\Distributor::find($id);
        $distributor->update($request->all());
        return redirect('/distributor');
    }
    public function delete($id)
    {
        $distributor = \App\Distributor::find($id);
        $distributor->delete($distributor);
        return redirect('/distributor');
    }
}
