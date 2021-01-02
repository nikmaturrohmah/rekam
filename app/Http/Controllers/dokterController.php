<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dokter;
use Illuminate\Support\Facades\DB;

class dokterController extends Controller
{
    public function dokter(Request $request)
    {
        // mengambil data dari table anggota
        if ($request->has('cari')){ $dokter = dokter::where('NAMA_DOKTER','like','%'.$request->cari."%")->get ();}
        else{
        $dokter = dokter::all();
        }

        // mengirim data petugas ke view anggota
        return view('/dokter/dokter',['dokter' => $dokter]);
    }

    public function tambahdokter()
    {
        return view('dokter/tambahdokter');
    }

    public function simpan(Request $request)
    {
        DB::table('dokter')->insert([
            'ID_DOKTER' => $request->ID_DOKTER,
            'NAMA_DOKTER' => $request->NAMA_DOKTER,
            'ALAMAT' => $request->ALAMAT,
            'KOTA_TINGGAL' => $request->KOTA_TINGGAL,
            'NO_TLP' => $request->NO_TLP,
            'ASPESIALISASI' => $request->ASPESIALISASI
        ]);
        //alihkan ke halaman anggota
        return redirect('dokter');
    }

    public function edit($ID_DOKTER)
    {
        $dokter = DB::table('dokter')->where('ID_DOKTER',$ID_DOKTER)->get();
        return view('/dokter/edit',['dokter' => $dokter]);
    }

    public function update(Request $request, $ID_DOKTER)
    {
        DB::table('dokter')->where('ID_DOKTER', $ID_DOKTER)->update([
            'NAMA_DOKTER' => $request->NAMA_DOKTER,
            'ALAMAT' => $request->ALAMAT,
            'KOTA_TINGGAL' => $request->KOTA_TINGGAL,
            'NO_TLP' => $request->NO_TLP,
            'ASPESIALISASI' => $request->ASPESIALISASI
        ]);
        return redirect('/dokter');
    }

    public function softdel($id)
    {
        $dokter = dokter::find($id);
        $dokter->delete();
        return redirect('/dokter');
    }


    
}