<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class petugas_admin extends Model
{
	protected $table = "petugas_admin";
    protected $primaryKey = "ID_PETUGAS";
    public function rekam_medis(){
    return $this->hasMany(RekamMedis::class, 'ID_PETUGAS');
	}
	public function user(){
		return $this->hasOne(User::class, 'ID_PETUGAS');
	}
	protected $fillable = [
        'NAMA_PETUGAS',
        'email',
        'ALAMAT',
        'KOTA_TINGGAL',
        'NO_TLP'
    ];
	use SoftDeletes;
    protected $timestamp= false;
    protected $dates= ['deleted_at'];
}