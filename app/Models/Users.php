<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Prodi;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }

    // public function prodi(): HasOne
    // {
    //     return $this->hasOne(Prodi::class);
    // }
    

}
