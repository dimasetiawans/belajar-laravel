<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    //
    public function index(){
        $pegawai = DB::table('pegawai')->paginate(10);
        return view('index', ['pegawai'=>$pegawai]);
    }

    public function tambah(){
        return view('tambah');
    }

    public function store(Request $request){
        DB::table('pegawai')->insert([
            'nama'=>$request->nama,
            'jabatan'=>$request->jabatan,
            'umur'=>$request->umur,
            'alamat'=>$request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function edit($id){
        $pegawai = DB::table('pegawai')->where('id', $id)->get();
        return view('edit', ['pegawai'=> $pegawai]);
    }

    public function update(Request $request){
        DB::table('pegawai')->where('id', $request->id)->update([
            'nama'=>$request->nama,
            'jabatan'=>$request->jabatan,
            'umur'=>$request->umur,
            'alamat'=>$request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function delete($id){
        DB::table('pegawai')->where('id', $id)->delete();
        return redirect('/pegawai');
    }
}