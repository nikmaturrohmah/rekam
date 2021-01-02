<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;
use Illuminate\Support\Facades\DB;



class obatController extends Controller
{
    public function obat(Request $request)
    {
        
        // mengambil data dari table anggota
        if ($request->has('cari')){ $obat = obat::where('NAMA_OBAT','like','%'.$request->cari."%")->get ();}
        else{
        $obat = obat::all();
        }
 
        // mengirim data petugas ke view anggota
        return view('/obat/obat',['obat' => $obat]);
    }

    public function tambahobat()
    {
        return view('obat/tambahobat');
    }

    public function simpan(Request $request)
    {
        DB::table('obat')->insert([
            'ID_OBAT' => $request->ID_OBAT,
            'KATEGORI_OBAT' => $request->KATEGORI_OBAT,
            'NAMA_OBAT' => $request->NAMA_OBAT,
            'BENTUK_OBAT' => $request->BENTUK_OBAT,
            'TGL_KADALUARSA' => $request->TGL_KADALUARSA,
            'HARGA_OBAT' => $request->HARGA_OBAT
        ]);
        //alihkan ke halaman anggota
        return redirect('/obat');
    }

    public function edit($id)
    {
        $obat = DB::table('obat')->where('ID_OBAT',$id)->get();
        return view('/obat/edit',['obat' => $obat]);
    }

    public function update(Request $request, $id)
    {
        DB::table('obat')->where('ID_OBAT', $id, $request->ID_OBAT)->update([
            'ID_OBAT' => $request->ID_OBAT,
            'KATEGORI_OBAT' => $request->KATEGORI_OBAT,
            'NAMA_OBAT' => $request->NAMA_OBAT,
            'BENTUK_OBAT' => $request->BENTUK_OBAT,
            'TGL_KADALUARSA' => $request->TGL_KADALUARSA,
            'HARGA_OBAT' => $request->HARGA_OBAT
        ]);
        return redirect('/obat');
    }

    public function softdel($id)
    {
        $obat = obat::find($id);
        $obat->delete();
        return redirect('/obat');
    }

}