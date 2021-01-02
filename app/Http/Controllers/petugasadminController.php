<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\petugas_admin;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class petugasadminController extends Controller
{
    public function petugasadmin(Request $request)
    {
        // mengambil data dari table anggota
        if ($request->has('cari')){ $petugasadmin = petugas_admin::where('NAMA_PETUGAS','like','%'.$request->cari."%")->get ();}
        else{
        $petugasadmin = petugas_admin::all();
        } 
        // mengirim data petugas ke view anggota
        return view('/petugasadmin/petugasadmin', ['petugasadmin' => $petugasadmin]);
    }

    public function tambahpetugasadmin()
    {
        return view('petugasadmin/tambahpetugasadmin');
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
            'NAMA_PETUGAS'=>'required',
            'email'=>'required|email|unique:users',
            'ALAMAT'=>'required',
            'KOTA_TINGGAL'=>'required',
            'NO_TLP'=>'required',
        ]);
        petugas_admin::create([
            'NAMA_PETUGAS'=>$request->NAMA_PETUGAS,
            'email'=>$request->email,
            'ALAMAT'=>$request->ALAMAT,
            'KOTA_TINGGAL'=>$request->KOTA_TINGGAL,
            'NO_TLP'=>$request->NO_TLP,
        ]);
        $petugasadmin=DB::table('petugas_admin')->where('NAMA_PETUGAS',$request->NAMA_PETUGAS)->get();
        foreach ($petugasadmin as $key ) {
            $ID_PETUGAS = $key->ID_PETUGAS;
        }
        User::create([
            'name'=>$request->NAMA_PETUGAS,
            'email'=>$request->email,
            'password'=>bcrypt("petugasadmin"),
            'role'=>"admin",
            'ID_PETUGAS'=>$ID_PETUGAS,
        ]);
        //alihkan ke halaman anggota
        return redirect('petugasadmin');
    }

    public function edit($ID_PETUGAS)
    {
        $petugasadmin = DB::table('petugas_admin')->where('ID_PETUGAS',$ID_PETUGAS)->get();
        return view('/petugasadmin/edit',['petugasadmin' => $petugasadmin]);
    }

    public function update(Request $request, $ID_PETUGAS)
    {
        DB::table('petugas_admin')->where('ID_PETUGAS',$ID_PETUGAS)->update([
            'ID_PETUGAS' => $request->ID_PETUGAS,
            'NAMA_PETUGAS' => $request->NAMA_PETUGAS,
            'email' => $request->email,
            'ALAMAT' => $request->ALAMAT,
            'KOTA_TINGGAL' => $request->KOTA_TINGGAL,
            'NO_TLP' => $request->NO_TLP,
        ]);
        DB::table('users')->where('ID_PETUGAS',$ID_PETUGAS)->update([
            'name' => $request->NAMA_PETUGAS,
            'email' => $request->email,
        ]);
        return redirect('petugasadmin');
    }

    public function softdel($id)
    {
        $petugasadmin = petugas_admin::find($id);
        $petugasadmin->delete();
        return redirect('/petugasadmin');
    }


    
}