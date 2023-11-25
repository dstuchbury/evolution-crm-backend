<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'company_id',
        'activity_status_id',
        'activity_type_id',
        'opportunity_id',
        'date',
        'notes',
        'user_id',
    ];

    /*
     |--------------------------------------------------------------------------
     | Relationships
     |--------------------------------------------------------------------------
     */
    public function activityOutcomeTypes(): BelongsToMany
    {
        return $this->belongsToMany(ActivityOutcomeType::class, 'activity_outcomes');
    }

    public function activityStatus(): BelongsTo
    {
        return $this->belongsTo(ActivityStatus::class);
    }

    public function activityType(): BelongsTo
    {
        return $this->belongsTo(ActivityType::class);
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class, 'activity_contacts');
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function opportunity(): BelongsTo
    {
        return $this->belongsTo(Opportunity::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
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
