<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Company extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'company_type_id',
        'legal_name',
        'trading_name',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class, 'company_id');
    }

    public function addresses(): BelongsToMany
    {
        return $this->belongsToMany(Address::class, 'company_addresses')
            ->withPivot(['address_type_id', 'from_date', 'to_date']);
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class, 'company_id');
    }

    public function companyLists(): BelongsToMany
    {
        return $this->belongsToMany(CompanyList::class, 'company_list_members')->withPivot('from_date', 'to_date');
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
