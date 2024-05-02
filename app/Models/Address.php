<?php

namespace App\Models;

use App\Models\Country;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function country() : BelongsTo {
        return $this->belongsTo(Country::class);
    }

    public function company() : BelongsTo {
        return $this->belongsTo(Company::class);
    }

}
