<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
    use HasFactory;

    protected $table='registro';
    protected $fillable=[
        'id',
        'name',
        'bano'
    ];
}