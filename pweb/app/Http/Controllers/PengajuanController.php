<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{

    public function daftar(){
        $maju = Pengajuan::all();
        return view('daftar', compact('maju'));
    }

    public function create(){
        return view('pengajuan');
    }

    public function store(Request $request){
        $req = Pengajuan::create([
            'nama_pengaju' => $request->nama_pengaju,
            'alamat'=> $request->alamat,
            'no_hp' => $request->no_hp,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
        ]);
        $req->save();
        return redirect('daftar');
    }
}
