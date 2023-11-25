<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CompanyList extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'company_list_type_id',
        'name',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */
    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class, 'company_list_members')->withPivot('from_date', 'to_date');
    }

    public function companyListType(): BelongsTo
    {
        return $this->belongsTo(CompanyListType::class);
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
