<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Application;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'rising', 'payment_date'
    ];

    public function invoices() : HasMany {
        return $this->hasMany(Invoice::class);
    }

    public function transactions() : HasMany {
        return $this->hasMany(Transaction::class);
    }

    public function application() : BelongsTo {
        return $this->belongsTo(Application::class);
    }

    public function order() : BelongsTo {
        return $this->belongsTo(Order::class);
    }

    public function customer() : BelongsTo {
        return $this->belongsTo(Customer::class);
    }

}
