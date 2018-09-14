<?php

namespace Populasi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Permission\Traits\HasRoles;


class Sapi extends Model
{
    use HasRoles;
    use SoftDeletes;

    protected $guard_name = 'web';

    protected $table = 'sapi';

    protected $fillable = [
        'anggota_id',
        'tipe_sapi_id',
        'fase_sapi_id',
        'jenis_kelamin',
        'tgl_lhr',
        'eartag',
    ];

    protected $dates = ['deleted_at'];

    public function anggota() 
    {
        return $this->belongsTo('Populasi\Models\Anggota', 'anggota_id');
    }

    public function tipesapi() 
    {
        return $this->belongsTo('Populasi\Models\TipeSapi', 'tipe_sapi_id');
    }

    public function fasesapi() 
    {
        return $this->belongsTo('Populasi\Models\FaseSapi', 'fase_sapi_id');
    }
}
