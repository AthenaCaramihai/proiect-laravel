<?php

namespace App\Models;

use App\Models\Movies;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Persons extends Model
{
    use HasFactory;

    protected $table = 'persons';
    protected $fillable = ['uuid','nume','prenume','age'];

    public function movies(): HasMany
    {
        return $this->hasMany(Movies::class);
    }
}
