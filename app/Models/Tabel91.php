<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Periode;
use App\Models\Users;


class Tabel91 extends Model
{
    use HasFactory;

    protected $table = 'ipk_lulusan_infokom';

    public function periode(): HasMany
    {
        return $this->hasMany(Users::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(Users::class);
    }
}
