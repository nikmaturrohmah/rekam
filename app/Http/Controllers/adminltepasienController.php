<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pasien;
use Illuminate\Support\Facades\Auth;


class adminltepasienController extends Controller
{
    public function pasien()
    {
        $cari = Auth::user()->ID_PASIEN;
        // mengambil data dari table anggota
        $pasien = DB::table('pasien')->where('ID_PASIEN',$cari)->get();

 
        // mengirim data petugas ke view anggota
        return view('/pasien1/pasien1', ['pasien' => $pasien]);
    }

    


    
}