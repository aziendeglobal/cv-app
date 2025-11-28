<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portfolio extends Model
{
    use HasFactory;
    protected $guarded = [];

     //protected $table = '';

            protected $fillable = [
            'title',
            'portfolio_technology_id',
            'portfolio_type_id',
            'description',
            'details',
            'cover_image',
            'active',
            'priority',
    ];

    protected $casts = [

    ];

    public function images(): HasMany
    {
        return $this->hasMany(PortfolioImage::class);
    }

    public function portfolioTechnology(): BelongsTo
    {
        return $this->belongsTo(PortfolioTechnology::class);
    }

    public function portfolioType(): BelongsTo
    {
        return $this->belongsTo(PortfolioType::class);
    }
}
