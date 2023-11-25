<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ActivityOutcomeType extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'confidence_weight_applied',
        'name',
    ];

    /*
     |--------------------------------------------------------------------------
     | Relationships
     |--------------------------------------------------------------------------
     */
    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(Activity::class);
    }

    /*
     |--------------------------------------------------------------------------
     | Methods
     |--------------------------------------------------------------------------
     */

    /*
     |--------------------------------------------------------------------------
     | Scopes
     |--------------------------------------------------------------------------
     */

}
