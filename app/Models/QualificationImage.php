<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QualificationImage extends Model
{
    protected $guarded = [];

    public function qualification(): BelongsTo
    {
        return $this->belongsTo(Qualification::class);
    }
}