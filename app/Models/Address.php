<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Address extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'line_1',
        'line_2',
        'line_3',
        'town_city',
        'county_region',
        'postcode_zip',
        'country_name',
        'country_code',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */
    public function Companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class, 'company_addresses')->withPivot('from_date', 'to_date');
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
