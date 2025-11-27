<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PortfolioTechnology extends Model
{
    use HasFactory;
    protected $guarded = [];

        protected $fillable = [
        'name',
    ];

    protected $casts = [

    ];

     public function portfolios(): HasMany
    {
        return $this->hasMany(Portfolio::class);
    }
}
