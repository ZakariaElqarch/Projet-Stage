<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class project extends Model
{
    use HasFactory;
    public function project(): BelongsTo
    {
        return $this->belongsTo(Convention::class , 'convID');
    }
}
