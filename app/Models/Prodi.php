<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Instrumen;
use App\Models\Users;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';

    public function instrumen(): BelongsTo
    {
        return $this->belongsTo(Instrumen::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(Users::class);
    }
    
}
