<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\RekamMedis;
use \App\Models\dokter;
use \App\Models\pasien;
use \App\Models\petugas_admin;
use Illuminate\Support\Facades\DB;

class RekamController extends Controller
{
    public function index(Request $request){
        if ($request->has('cari')){ $rekammedis = rekammedis::where('ID_REKAM_MEDIS','like','%'.$request->cari."%")->get ();}
        else{
        $rekammedis = RekamMedis::all();
        }
        $petugas_admin = petugas_admin::all();
        $pasien = pasien::all();
        $dokter = dokter::all();
        return view('/rekammedis/rekammedis',['rekammedis' =>$rekammedis], compact('petugas_admin'),compact('pasien'));
    }
    public function tambah(){
        $petugas_admin = petugas_admin::all();
        $pasien = pasien::all();
        $dokter = dokter::all();
        return view('/rekammedis/tambah', compact('dokter', 'pasien', 'petugas_admin'));
    }
    public function simpan(Request $request){
        $this->validate($request,[
            'ID_PETUGAS' => 'required',
            'ID_PASIEN' => 'required',
            'ID_DOKTER' => 'required',
            'TGL_PERIKSA' => 'required',
            'DIAGNOSA' => 'required',
            'KETERANGAN' => 'required',
            'BIAYA_JASA' => 'required'
        ]);

        RekamMedis::create([
            
            'ID_PETUGAS' => $request->ID_PETUGAS,
            'ID_PASIEN' => $request->ID_PASIEN,
            'ID_DOKTER' => $request->ID_DOKTER,
            'TGL_PERIKSA' => $request->TGL_PERIKSA,
            'DIAGNOSA' => $request->DIAGNOSA,
            'KETERANGAN' => $request->KETERANGAN,
            'BIAYA_JASA' => $request->BIAYA_JASA
        ]);
        return redirect('/rekammedis');
    }
    public function edit($id){
        $rekammedis = RekamMedis::find($id);
        $petugas_admin = petugas_admin::all();
        $pasien = pasien::all();
        $dokter = dokter::all();
        return view('/rekammedis/edit', compact('dokter', 'pasien', 'petugas_admin','rekammedis'));
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'ID_PETUGAS' => 'required',
            'ID_PASIEN' => 'required',
            'ID_DOKTER' => 'required',
            'TGL_PERIKSA' => 'required',
            'DIAGNOSA' => 'required',
            'KETERANGAN' => 'required',
            'BIAYA_JASA' => 'required'
        ]);
        $RekamMedis = RekamMedis::find($id);
            $RekamMedis->ID_PETUGAS = $request->ID_PETUGAS;
            $RekamMedis->ID_PASIEN = $request->ID_PASIEN;
            $RekamMedis->ID_DOKTER = $request->ID_DOKTER;
            $RekamMedis->TGL_PERIKSA = $request->TGL_PERIKSA;
            $RekamMedis->DIAGNOSA = $request->DIAGNOSA;
            $RekamMedis->KETERANGAN = $request->KETERANGAN;
            $RekamMedis->BIAYA_JASA = $request->BIAYA_JASA;
            $RekamMedis -> update ($request->all());
            $RekamMedis->save();
            return redirect('/rekammedis');
    }
    public function softdel($id)
    {
        $rekammedis = rekammedis::find($id);
        $rekammedis->delete();
        return redirect('/rekammedis');
    }

}