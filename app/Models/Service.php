<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'division_id',
        'titre',
        'email',
        'tel'
        ];
        public function division()
        {
            return $this->belongsTo(Division::class);
        }

}
