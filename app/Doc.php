<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    protected $table='docs';

    protected $fillable = [
        'tipo_id','numero','monto',
    ];
}
