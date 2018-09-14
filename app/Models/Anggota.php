<?php

namespace Populasi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Permission\Traits\HasRoles;


class Anggota extends Model
{
    use HasRoles;
    use SoftDeletes;

    protected $guard_name = 'web';

    protected $table = 'anggota';

    protected $fillable = [
        'no_anggota',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'dusun',
        'desa',
        'wilayah_id',
        'kelompok_id',
        'no_registrasi',
        'status',
    ];

    public function wilayah()
    {
        return $this->belongsTo('Populasi\Models\Wilayah', 'wilayah_id');
    }
    public function kelompok()
    {
        return $this->belongsTo('Populasi\Models\Kelompok', 'kelompok_id');
    }
}
