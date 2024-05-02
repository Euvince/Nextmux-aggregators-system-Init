<?php

namespace App\Models;

use App\Models\User;
use App\Models\Order;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'stock'
    ];

    public function orders() : BelongsToMany {
        return $this->belongsToMany(Order::class);
    }

    public function companies() : BelongsToMany {
        return $this->belongsToMany(Company::class);
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

}
