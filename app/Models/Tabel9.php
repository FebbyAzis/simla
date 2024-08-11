<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Periode;
use App\Models\Users;


class Tabel9 extends Model
{
    use HasFactory;

    protected $table = 'masa_studi_sarjana';

    public function periode(): HasMany
    {
        return $this->hasMany(Users::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(Users::class);
    }
}
