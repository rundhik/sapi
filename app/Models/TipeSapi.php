<?php

namespace Populasi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipeSapi extends Model
{
    use SoftDeletes;
    
    protected $table = 'tipe_sapi';

    protected $fillable = ['nama', 'deskripsi'];

    protected $dates = ['deleted_at'];

    public function sapi()
    {
        return $this->hasMany('Populasi\Models\Sapi', 'tipe_sapi_id', 'id');
    }
}
