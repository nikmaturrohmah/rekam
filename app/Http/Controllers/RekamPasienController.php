<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\rekampasien;
use \App\Models\RekamMedis;
use \App\Models\dokter;
use \App\Models\pasien;
use \App\Models\obat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class RekamPasienController extends Controller
{
    public function index(){
    	$cari = Auth::user()->ID_PASIEN;
        $rekammedispasien  = DB::table('rekam_medis')
        ->join('petugas_admin', 'rekam_medis.ID_PETUGAS', '=', 'petugas_admin.ID_PETUGAS')  
        ->join('pasien', 'rekam_medis.ID_PASIEN', '=', 'pasien.ID_PASIEN')
        ->join('dokter', 'rekam_medis.ID_DOKTER', '=', 'dokter.ID_DOKTER')
		->where('rekam_medis.ID_PASIEN',$cari)->get();
        return view('/rekammedispasien/rekammedispasien', compact('rekammedispasien'));
    	/*$rekammedispasien = rekampasien::all();
    	$rekammedis = RekamMedis::all();
        $pasien = pasien::all();
        $dokter = dokter::all();
        $obat = obat::all();
        return view('/rekammedispasien/rekammedispasien',['rekammedispasien' =>$rekammedispasien], compact('rekammedispasien', 'rekammedis', 'pasien', 'dokter', 'obat'));*/
    }
}