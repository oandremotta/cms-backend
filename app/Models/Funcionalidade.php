<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionalidade extends Model
{
    use HasFactory;

    protected $table = 'funcionalidades_app';

    protected $primaryKey = 'id';
}
