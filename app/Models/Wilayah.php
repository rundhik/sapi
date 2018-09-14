<?php

namespace Populasi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wilayah extends Model
{
    use SoftDeletes;
    protected $table = 'wilayah';
    
    protected $fillable = [
        'nama_wilayah', 'deskripsi',
    ];

    protected $dates = ['deleted_at'];

    public function kelompok()
    {
    	return $this->hasMany('Populasi\Models\Kelompok', 'wilayah_id', 'id');
    }

    public function anggota()
    {
    	return $this->hasMany('Populasi\Models\Anggota', 'wilayah_id', 'id');
    }

    public function sapi()
    {
        return $this->hasManyThrough(
            'Populasi\Models\Sapi',
            'Populasi\Models\Anggota',
            'wilayah_id',
            'anggota_id',
            'id',
            'id'
        );
    }
}
