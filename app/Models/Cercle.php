<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cercle extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_cercle',
        'pay_id'
    ];
}
