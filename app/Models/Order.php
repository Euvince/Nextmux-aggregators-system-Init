<?php

namespace App\Models;

use App\Models\Payment;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'processing_date', 'order_date', 'rising', 'status',
    ];

    public function application() : BelongsTo {
        return $this->belongsTo(Application::class);
    }

    public function payments() : HasMany {
        return $this->hasMany(Payment::class);
    }

    public function customer() : BelongsTo {
        return $this->belongsTo(Customer::class);
    }

    public function products() : BelongsToMany {
        return $this->belongsToMany(Product::class);
    }

}
