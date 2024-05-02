<?php

namespace App\Models;

use App\Models\User;
use App\Models\Payment;
use App\Models\Application;
use App\Models\PaymentMethod;
use App\Models\TransactionHistory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'number', 'name', 'status', 'rising', 'processing_date'
    ];

    public function payment_method() : BelongsTo {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function transaction_histories() : HasMany {
        return $this->hasMany(TransactionHistory::class);
    }

    public function payment() : BelongsTo {
        return $this->belongsTo(Payment::class);
    }

    public function application() : BelongsTo {
        return $this->belongsTo(Application::class);
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

}
