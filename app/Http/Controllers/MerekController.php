<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerekController extends Controller
{
     public function index(Request $request)
    {
   $data_merek=\App\Merek::all();
        
        
        return view('merek.index',['data_merek' => $data_merek]);
    }
    public function create(Request $request)
    {
        \App\Merek::create($request->all());
        return redirect('/merek')->with('sukses','data berhasil disimpan');
    }
    public function edit($id)
    {
        $merek = \App\Merek::find($id);
  
        return view('merek/edit',['merek' =>$merek]);
    }
    public function update(Request $request,$id)
    {
        $merek = \App\Merek::find($id);
        $merek->update($request->all());
        return redirect('/merek');
    }
    public function delete($id)
    {
        $merek = \App\Merek::find($id);
        $merek->delete($merek);
        return redirect('/merek');
    }
}
