<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{


    use HasFactory;


    protected $fillable = [
        ' id ',
        'convention_id ',
        'title ',
        'validity',
        'budget ',
        'phase ',
        'progress '

    ];
    public function Convention()
    {
        return $this->belongsTo(Convention::class);
    }
}
