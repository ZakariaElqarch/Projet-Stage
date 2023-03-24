<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'chef',
        'email',
        'tel'
        ];
        public function services()
        {
            return $this->hasMany(Service::class);
        }
}
