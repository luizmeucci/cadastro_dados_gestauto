<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dados extends Model
{
    protected $fillable = ['nome', 'email', 'nascimento', 'curriculo'];
}
