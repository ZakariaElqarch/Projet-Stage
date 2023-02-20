<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conventions_communes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_convention',
        'id_commune'
        ];
}
