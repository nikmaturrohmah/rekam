<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class resepobat extends Model
{
    //
    protected $table = "resep_obat";
    protected $primaryKey = "ID_RESEP";
    protected $fillable = ['ID_RESEP','ID_REKAM_MEDIS', 'ID_OBAT', 'JUMLAH'];
    
    public function rekam_medis(){
    return $this->belongsTo(RekamMedis::class, 'ID_REKAM_MEDIS');
	}
    public function obat(){
    return $this->belongsTo(obat::class, 'ID_OBAT');
    }
	use SoftDeletes;
    protected $timestamp= false;
    protected $dates= ['deleted_at'];
}