<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model {
    protected $fillable = ['name', 'schedule', 'init_date', 'end_date'];
}
