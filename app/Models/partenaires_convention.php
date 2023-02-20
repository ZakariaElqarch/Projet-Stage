<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaires_convention extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_convention',
        'id_partenaire'
        ];
}
