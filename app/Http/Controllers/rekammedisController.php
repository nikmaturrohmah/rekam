<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RekamMedis;

class rekammedisController extends Controller
{
    public function index()
    {
        $rekammedis = RekamMedis::all();
        return view('rekammedis/rekammedis', ['rekammedis'=>$rekammedis]);
    }

    public function tambah()
    {
        return view('rekammedis/tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            /*'ID_REKAM_MEDIS' => 'required',*/
            'ID_PETUGAS' => 'required',
            'ID_PASIEN' => 'required',
            'ID_DOKTER' => 'required',
            'TGL_PERIKSA' => 'required',
            'DIAGNOSA' => 'required',
            'KETERANGAN' => 'required',
            'BIAYA_JASA' => 'required'
        ]);
        
        RekamMedis::create([
            'ID_REKAM_MEDIS' => null,
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

    public function edit($id)
    {
        $rekammedis = RekamMedis::find($id);
        return view('/rekammedis/edit',['rekammedis' => $rekammedis]);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'ID_REKAM_MEDIS' => 'required',
            'ID_PETUGAS' => 'required',
            'ID_PASIEN' => 'required',
            'ID_DOKTER' => 'required',
            'TGL_PERIKSA' => 'required',
            'DIAGNOSA' => 'required',
            'KETERANGAN' => 'required',
            'BIAYA_JASA' => 'required'
        ]);
        $rekammedis = RekamMedis::find($request->ID_REKAM_MEDIS);
        $rekammedis->ID_PETUGAS = $request->ID_PETUGAS;
        $rekammedis->ID_PASIEN = $request->ID_PASIEN;
        $rekammedis->ID_DOKTER = $request->ID_DOKTER;
        $rekammedis->TGL_PERIKSA = $request->TGL_PERIKSA;
        $rekammedis->DIAGNOSA = $request->DIAGNOSA;
        $rekammedis->KETERANGAN = $request->KETERANGAN;
        $rekammedis->BIAYA_JASA = $request->BIAYA_JASA;
        $rekammedis->save();
        return redirect('/rekammedis');
    }

    public function hapus($id)
    {
        //menghapus data pasien
        $rekammedis = RekamMedis::find($id);
        $rekammedis->delete();
        return redirect('/rekammedis');
    }


    
}