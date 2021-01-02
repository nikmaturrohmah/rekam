<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RekamMedis extends Model
{
    protected $table = "rekam_medis";
    protected $primaryKey = "ID_REKAM_MEDIS";
   /* /protected $dates = ['deleted_at'];/*/
    protected $fillable = ['ID_REKAM_MEDIS','ID_PETUGAS','ID_PASIEN', 'ID_DOKTER', 'TGL_PERIKSA','DIAGNOSA', 'KETERANGAN','BIAYA_JASA'];
    
    public function petugas_admin(){
    return $this->belongsTo(petugas_admin::class, 'ID_PETUGAS');
    }

    public function pasien(){
    return $this->belongsTo(pasien::class, 'ID_PASIEN');
    }
    public function dokter(){
    return $this->belongsTo(dokter::class, 'ID_DOKTER');
    }

    public function resepobat(){
    return $this->hasMany(resepobat::class, 'ID_REKAM_MEDIS');
    }
    public function rekam_medis_pasien(){
    return $this->hasMany(rekampasien::class, 'ID_REKAM_MEDIS');
    }
    use SoftDeletes;
    protected $timestamp= false;
    protected $dates= ['deleted_at'];
}