<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detailresep extends Model
{
    //
    protected $table = "detail_resep";
    protected $primaryKey = "ID_OBAT , ID_RESEP";
    protected $fillable = ['ID_OBAT','ID_RESEP','TGL_DETAIL_RESEP'];
    protected $timestamp= false;

    public function obat(){
    	return $this->belongsTo(obat::class,'ID_OBAT');
    }

    public function resepobat(){
    	return $this->belongsTo(resepobat::class,'ID_RESEP');
    }
}