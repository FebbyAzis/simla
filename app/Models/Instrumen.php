<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Prodi;

class Instrumen extends Model
{
    use HasFactory;

    protected $table = 'instrumen';

    public function prodi(): HasMany
    {
        return $this->hasMany(Prodi::class);
    }
}
