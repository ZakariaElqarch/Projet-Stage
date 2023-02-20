<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'email',
        'tel'
        ];
        public function Convention(){
            return $this->belongsTo(Convention::class);
        }
}
