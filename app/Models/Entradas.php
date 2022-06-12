<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
    use HasFactory;

    protected $table='entrada';
    protected $fillable=[
        'id',
        'name',
        'bano'
    ];
}
