<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Qualification extends Model
{
    protected $guarded = [];

    public function images(): HasMany
    {
        return $this->hasMany(QualificationImage::class);
    }
}