<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convention extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'date_Validiter',
        'budget'
        ];
        public function Commune(){
            return $this->hasMany(Commune::class);
        }
        public function Partenaire(){
            return $this->hasMany(Partenaire::class);
        }
        public function projects()
    {
        return $this->hasMany(Project::class);
    }
}