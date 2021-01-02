<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class obat extends Model
{
    //
    protected $table = "obat";
    protected $primaryKey = "ID_OBAT";
    public function rekam_medis_pasien(){
    return $this->hasMany(rekampasien::class, 'ID_OBAT');
	}
	public function resepobat(){
    return $this->hasMany(resepobat::class, 'ID_OBAT');
    }
	use SoftDeletes;
    protected $timestamp= false;
    protected $dates= ['deleted_at'];
}