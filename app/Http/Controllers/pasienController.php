<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pasien;

class pasienController extends Controller
{
    public function pasien(Request $request)
    {
        // mengambil data dari table anggota
        if ($request->has('cari')){ $pasien = pasien::where('NAMA_PASIEN','like','%'.$request->cari."%")->get ();}
        else{
        $pasien = pasien::all();
        }
 
        // mengirim data petugas ke view anggota
        return view('/pasien/pasien', ['pasien' => $pasien]);
    }

    public function tambahpasien()
    {
        return view('pasien/tambahpasien');
    }

    public function simpan(Request $request)
    {
        DB::table('pasien')->insert([
            'ID_PASIEN' => $request->ID_PASIEN,
            'NAMA_PASIEN' => $request->NAMA_PASIEN,
            'TGL_LAHIR' => $request->TGL_LAHIR,
            'TEMPAT_LAHIR' => $request->TEMPAT_LAHIR,
            'JENIS_KELAMIN' => $request->JENIS_KELAMIN,
            'ALAMAT' => $request->ALAMAT,
            'KOTA_TINGGAL' => $request->KOTA_TINGGAL,
            'NO_TLP' => $request->NO_TLP,
            'PEKERJAAN' => $request->PEKERJAAN,
        ]);
        //alihkan ke halaman anggota
        return redirect('pasien');
    }

    public function edit($ID_PASIEN)
    {
        $pasien = DB::table('pasien')->where('ID_PASIEN',$ID_PASIEN)->get();
        return view('pasien/edit',['pasien' => $pasien]);
    }

    public function update(Request $request, $ID_PASIEN)
    {
        DB::table('pasien')->where('ID_PASIEN',$ID_PASIEN)->update([
            'NAMA_PASIEN' => $request->NAMA_PASIEN,
            'TGL_LAHIR' => $request->TGL_LAHIR,
            'TEMPAT_LAHIR' => $request->TEMPAT_LAHIR,
            'JENIS_KELAMIN' => $request->JENIS_KELAMIN,
            'ALAMAT' => $request->ALAMAT,
            'KOTA_TINGGAL' => $request->KOTA_TINGGAL,
            'NO_TLP' => $request->NO_TLP,
            'PEKERJAAN' => $request->PEKERJAAN,
        ]);
        DB::table('users')->where('ID_PASIEN', $ID_PASIEN)->update([
            'name' => $request->NAMA_PASIEN,
        ]);
        return redirect('pasien');
    }

    public function softdel($id)
    {
        $pasien = pasien::find($id);
        $pasien->delete();
        return redirect('/pasien');
    }


    
}