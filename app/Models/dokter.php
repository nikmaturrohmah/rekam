<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class dokter extends Model
{
	protected $table = "dokter";
    protected $primaryKey = "ID_DOKTER";
    protected $fillable = ['NAMA_DOKTER','ALAMAT','KOTA_TINGGAL', 'NO_TLP', 'ASPESIALISASI'];
    /*protected $fillable = ['ID_REKAM_MEDIS', 'ID_PETUGAS', 'ID_PASIEN','ID_DOKTER','TGL_PERIKSA', 'DIAGNOSA','KETERANGAN','BIAYA_JASA'];
    public $timestamps = false;*/
    public function rekam_medis(){
    return $this->hasMany(RekamMedis::class, 'ID_DOKTER');
	}
	public function rekam_medis_pasien(){
    return $this->hasMany(pekampasien::class, 'ID_DOKTER');
	}
    use SoftDeletes;
    protected $timestamp= false;
    protected $dates= ['deleted_at'];

}
