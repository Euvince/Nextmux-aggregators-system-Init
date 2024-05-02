<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Company;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 'lastname', 'email', 'phone', 'birth_date', 'sex'
    ];

    public function payments() : HasMany {
        return $this->hasMany(Payment::class);
    }

    public function orders() : HasMany {
        return $this->hasMany(Order::class);
    }

    public function customers() : BelongsToMany {
        return $this->belongsToMany(Customer::class);
    }

    public function companies() : BelongsToMany {
        return $this->belongsToMany(Company::class);
    }

}
