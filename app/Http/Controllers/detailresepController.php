<?php

namespace App\Http\Controllers;
use \App\Models\obat;
use \App\Models\resepobat;
use \App\Models\detailresep;

use Illuminate\Http\Request;

class detailresepController extends Controller
{
    //
    public function detailresep() {
    	$obat = obat::all();
    	$resepobat = resepobat::all();
    	$detailresep = detailresep::all();
    	return view('detailresep',compact('obat','resepobat','detailresep'));
    	
    }
    public function index(){
        $detailresep = detailresep::all();
        return view('/detailresep/detailresep',['detailresep' => $detailresep]);
    }
    public function tambah(){
        return view('detailresep/tambah');
    }
    public function simpan(Request $request){
        $this->validate($request,[
            'ID_OBAT' => 'required',
            'ID_RESEP' => 'required',
            'TGL_DETAIL_RESEP' => 'required'
        ]);

        detailresep::create([
            
            'ID_OBAT' => $request->ID_OBAT,
            'ID_RESEP' => $request->ID_RESEP,
            'TGL_DETAIL_RESEP' => $request->JUMLAH
        ]);
        return redirect('detailresep');
    }
    public function edit($id){
        $detailresep = detailresep::find($id);
        return view('detailresep/edit',['detailresep'=>$detailresep]);
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'ID_OBAT' => 'required',
            'ID_RESEP' => 'required',
            'TGL_DETAIL_RESEP' => 'required'
        ]);
        $detailresep = detailresep::find($id);
            $detailresep->ID_OBAT = $request->ID_OBAT;
            $detailresep->ID_RESEP = $request->ID_RESEP;
            $detailresep->TGL_DETAIL_RESEP = $request->TGL_DETAIL_RESEP;
            $detailresep -> update ($request->all());
            $resepobat->save();
            return redirect('detailresep');
    }
    public function hapus($id){
        $detailresep = detailresep::find($id);
        $detailresep->delete();
        return redirect('detailresep');
    }
}