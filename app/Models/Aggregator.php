<?php

namespace App\Models;

use App\Models\Country;
use App\Models\Application;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Aggregator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'identifiant'
    ];

    public function countries() : BelongsToMany {
        return $this->belongsToMany(Country::class);
    }

    public function payment_methods() : BelongsToMany {
        return $this->belongsToMany(PaymentMethod::class);
    }

    public function applications() : HasMany {
        return $this->hasMany(Application::class);
    }

}
