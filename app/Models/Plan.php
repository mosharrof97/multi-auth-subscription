<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'duration_in_days',
    ];

    protected function casts(): array
    {
        return [
            
        ];
    }

    /**
     * Get all of the comments for the Plan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    
    public function subscription(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
