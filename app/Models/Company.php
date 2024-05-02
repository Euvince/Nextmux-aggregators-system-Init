<?php

namespace App\Models;

use App\Models\User;
use App\Models\Address;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone'
    ];



    public function applications() : HasMany {
        return $this->hasMany(Application::class);
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function products() : BelongsToMany {
        return $this->belongsToMany(Product::class);
    }

    public function customers() : BelongsToMany {
        return $this->belongsToMany(Customer::class);
    }

    public function addresses() : HasMany {
        return $this->hasMany(Address::class);
    }

}
