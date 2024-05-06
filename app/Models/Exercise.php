<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];  // Asegúrate de que 'fillable' incluya los campos que permites llenar masivamente.

}
