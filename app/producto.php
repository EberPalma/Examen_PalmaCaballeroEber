<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table='producto';

    protected $fillable=[
        'id',
        'nombre',
        'precio',
        'stock'
    ];
}
