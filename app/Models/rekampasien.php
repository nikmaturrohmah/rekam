<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rekampasien extends Model
{
    protected $table = "rekam_medis_pasien";
    protected $primaryKey = "ID_REKAM_MEDIS, ID_PASIEN, ID_DOKTER, ID_OBAT";
   /* /protected $dates = ['deleted_at'];/*/
    protected $fillable = ['ID_REKAM_MEDIS','ID_PASIEN', 'ID_DOKTER', 'ID_OBAT','TGL_PERIKSA','DIAGNOSA', 'KETERANGAN','BIAYA_JASA'];
    protected $timestamp= false;

	public function pasien(){
    return $this->belongsTo(pasien::class, 'ID_PASIEN');
	}
	public function dokter(){
    return $this->belongsTo(dokter::class, 'ID_DOKTER');
	}

    public function obat(){
    return $this->belongsTo(obat::class, 'ID_OBAT');
    }
    public function rekam_medis(){
    return $this->belongsTo(RekamMedis::class, 'ID_REKAM_MEDIS');
    }

}