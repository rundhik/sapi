<?php

namespace Populasi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelompok extends Model
{
    use SoftDeletes;
    protected $table = 'kelompok';
    protected $fillable = ['nama_kelompok','deskripsi'];
    protected $dates = ['deleted_ad'];
    
    public function wilayah()
    {
    	return $this->belongsTo('Populasi\Models\Wilayah', 'wilayah_id');
    }

    public function anggota()
    {
    	return $this->hasMany('Populasi\Models\Anggota', 'kelompok_id', 'id');
    }

    public function sapi()
    {
        return $this->hasManyThrough(
            'Populasi\Models\Sapi',
            'Populasi\Models\Anggota',
            'kelompok_id',
            'anggota_id',
            'id',
            'id'
        );
    }
}
