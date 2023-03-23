<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
    	$karyawan = Karyawan::all();
    	return view('karyawan', ['karyawan' => $karyawan]);
    }
    
    public function tambah()
    {
    	return view('karyawan_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama_karyawan' => 'required',
    		'tgl_lahir' => 'required',
    		'kota_lahir' => 'required',
    	]);
 
        Karyawan::create([
    		'nama_karyawan' => $request->nama_karyawan,
    		'tgl_lahir' => $request->tgl_lahir,
    		'kota_lahir' => $request->kota_lahir
    	]);
 
    	return redirect('/');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan_edit',$karyawan);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama_karyawan' => 'required',
    		'tgl_lahir' => 'required',
    		'kota_lahir' => 'required',
    	]);
    
        $karyawan = Karyawan::find($id);
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->tgl_lahir = $request->tgl_lahir;
        $karyawan->kota_lahir = $request->kota_lahir;
        $karyawan->save();
        return redirect()->back();
    }

    public function delete($id)
    {
        $pegawai = Karyawan::find($id);
        $pegawai->delete();
        return redirect()->back();
    }



}

