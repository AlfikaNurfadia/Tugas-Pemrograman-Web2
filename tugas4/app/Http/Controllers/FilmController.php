<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilmController extends Controller
{
    public function index(){
        $data = film::all();
        return view('datafilm', compact('data'));
    }

    public function tambahfilm(){
        return view('tambahdata');
    }

    public function insertfilm(Request $request){
        $data = film::create($request->all());
        if ($request->hasFile('foto')){
            $request->file('foto')->move('posterfilm/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('films')->with('success', 'Data Berhasil Ditambahkan!');
    }     

    public function tampilkandata($id){
        $data = film::find($id);
        return view('tampildata', compact('data'));
    }     

    public function updatedata(Request $request, $id){
        $data = film::find($id);
        $data->update($request->all());
        return redirect()->route('films')->with('success', 'Data Berhasil Diedit!');
    }  

    public function delete($id){
        $data = film::find($id);
        $data->delete();
        return redirect()->route('films')->with('success', 'Data Berhasil Dihapus!');
    }  

}
