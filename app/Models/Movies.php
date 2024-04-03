<?php

namespace App\Models;

use App\Models\Persons;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movies extends Model
{
    use HasFactory;
    protected $table = 'movies';

    public function person(): BelongsTo
    {
        return $this->belongsTo(Persons::class);
    }
}
