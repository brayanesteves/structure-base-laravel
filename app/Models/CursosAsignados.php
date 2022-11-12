<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CursosAsignados extends Model {
    protected $fillable = ['reference_estudiante', 'reference_curso'];
}
