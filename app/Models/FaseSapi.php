<?php

namespace Populasi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaseSapi extends Model
{
    use SoftDeletes;

    protected $table = 'fase_sapi';

    protected $fillable = ['nama', 'deskripsi'];
    
    protected $dates = ['deleted_at'];

    public function sapi()
    {
        return $this->hasMany('Populasi\Models\Sapi', 'fase_sapi_id', 'id');
    }
}
