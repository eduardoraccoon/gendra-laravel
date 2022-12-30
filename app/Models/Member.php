<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'fk_cargo', 'fk_departamento', 'fk_tipo'];
}
