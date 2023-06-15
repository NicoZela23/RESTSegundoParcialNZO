<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuenta extends Model
{
    use HasFactory;
    protected $fillable = ["numerocuenta","clienteid","moneda","fechaapertura"];

    function cliente(){
        return $this->belongsTo(Cliente::class,'clienteid' , 'id');
    }
}