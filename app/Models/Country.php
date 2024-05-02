<?php

namespace App\Models;

use App\Models\Address;
use App\Models\Aggregator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'postal_code'
    ];

    public function adresses() : HasMany {
        return $this->hasMany(Address::class);
    }

    public function aggregators() : BelongsToMany {
        return $this->belongsToMany(Aggregator::class);
    }

}
