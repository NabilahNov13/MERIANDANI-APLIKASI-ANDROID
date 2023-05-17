<?php

namespace App\Http\Controllers;

use App\Models\AndroidPopuler;
use Illuminate\Http\Request;
use App\Http\Requests\AndroidPopulerRequest;

class AndroidPopulerController extends Controller
{
    public function index(){
        $AndroidPopuler = AndroidPopuler::get();
        return view('index', compact('AndroidPopuler'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $AndroidPopuler = AndroidPopuler::where('id', $id)->first();
        return view('edit', compact('AndroidPopuler'));
    }

    public function lihat($id){
        $AndroidPopuler = AndroidPopuler::where('id', $id)->first();
        return view('lihat', compact('AndroidPopuler'));

    }    
    public function store(AndroidPopulerRequest $request) 
    { 
        $AndroidPopuler = new AndroidPopuler(); 
 
        $AndroidPopuler->nama_android = $request->nama_android; 
        $AndroidPopuler->owner = $request->owner; 
 
        $AndroidPopuler->save(); 
 
        return redirect('/'); 
    }

    public function update(AndroidPopulerRequest $request, $id) 
    { 
        $AndroidPopuler = AndroidPopuler::where('id', $id)->first(); 
 
        $AndroidPopuler->nama_android = $request->nama_android; 
        $AndroidPopuler->owner = $request->owner; 

        $AndroidPopuler->update(); 
 
        return redirect('/'); 
    }

    public function hapus($id) 
    { 
        $AndroidPopuler = AndroidPopuler::where('id', $id)->first(); 
 
        $AndroidPopuler->delete(); 
 
        return redirect('/'); 
    }
}
