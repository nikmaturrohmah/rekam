<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class pasien extends Model
{
	protected $table = "pasien";
    protected $primaryKey = "ID_PASIEN";
    /*protected $fillable = ['ID_REKAM_MEDIS', 'ID_PETUGAS', 'ID_PASIEN','ID_DOKTER','TGL_PERIKSA', 'DIAGNOSA','KETERANGAN','BIAYA_JASA'];
    public $timestamps = false;*/
    public function rekam_medis(){
    return $this->hasMany(RekamMedis::class, 'ID_PASIEN');
	}
	public function rekam_medis_pasien(){
    return $this->hasMany(rekampasien::class, 'ID_PASIEN');
	}
    public function user(){
        return $this->hasOne(User::class, 'ID_PASIEN');
    }
    protected $fillable = [
        'NAMA_PASIEN', 'TGL_LAHIR', 'TEMPAT_LAHIR','JENIS_KELAMIN','ALAMAT','KOTA_TINGGAL','NO_TLP','PEKERJAAN',
    ];
    use SoftDeletes;
    protected $timestamp= false;
    protected $dates= ['deleted_at'];
}