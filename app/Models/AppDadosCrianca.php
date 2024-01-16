<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppDadosCrianca extends Model
{
    use HasFactory;

    protected $table = 'app_dados_da_crianca';

    protected $primaryKey = 'id';
}
