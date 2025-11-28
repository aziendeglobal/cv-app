<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Skill extends Model
{
    use HasFactory;
    protected $guarded = [];


     protected $fillable = [
        'name',
    ];

    protected $casts = [

    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategorySkill::class, 'category_skill_id');
    }
}
