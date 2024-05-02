<?php

namespace App\Models;

use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PaymentCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function countries() : BelongsToMany {
        return $this->belongsToMany(Country::class);
    }

    public function payment_methods() : BelongsToMany {
        return $this->belongsToMany(PaymentMethod::class);
    }

}
