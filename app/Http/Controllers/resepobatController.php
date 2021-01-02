<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\resepobat;
use \App\Models\RekamMedis;
use \App\Models\obat;


class resepobatController extends Controller
{
    public function index(Request $request){
        if ($request->has('cari')){ $resepobat = resepobat::where('ID_RESEP','like','%'.$request->cari."%")->get ();}
        else{
        $resepobat = resepobat::all();
        }
        $rekammedis = RekamMedis::all();
        $obat = obat::all();
        return view('resepobat/resepobat',['resepobat' =>$resepobat], compact('rekammedis', 'obat'));
    }
    public function tambah(){
         $rekammedis=RekamMedis::all();
         $obat=obat::all();
        return view('/resepobat/tambah', compact('rekammedis', 'obat'));
    }
    public function simpan(Request $request){
        $this->validate($request,[
            'ID_REKAM_MEDIS' => 'required',
            'ID_OBAT' => 'required',
            'JUMLAH' => 'required'
        ]);

        resepobat::create([
            'ID_REKAM_MEDIS' => $request->ID_REKAM_MEDIS,
            'ID_OBAT' => $request->ID_OBAT,
            'JUMLAH' => $request->JUMLAH
        ]);
        return redirect('/resepobat');
    }
    public function edit($id){
        $resepobat = resepobat::find($id);
        $rekammedis = RekamMedis::all();
        $obat = obat::all();
        return view('/resepobat/edit', compact('obat', 'rekammedis', 'resepobat'));
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'ID_REKAM_MEDIS' => 'required',
            'ID_OBAT' => 'required',
            'JUMLAH' => 'required'
        ]);
            $resepobat = resepobat::find($id);
            $resepobat->ID_REKAM_MEDIS = $request->ID_REKAM_MEDIS;
            $resepobat->ID_OBAT = $request->ID_OBAT;
            $resepobat->JUMLAH = $request->JUMLAH;
            $resepobat -> update ($request->all());
            $resepobat->save();
            return redirect('/resepobat');
    }
    public function softdel($id)
    {
        $resepobat = resepobat::find($id);
        $resepobat->delete();
        return redirect('/resepobat');
    }

}