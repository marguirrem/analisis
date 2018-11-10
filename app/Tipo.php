<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
  protected $table='tipodoc';

  protected $fillable = [
      'numero',
  ];
}
