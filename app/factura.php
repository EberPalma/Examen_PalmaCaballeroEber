<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $table='factura';

    protected $fillable=[
        'numero',
        'fecha',
        'id_cliente'
    ];
}
