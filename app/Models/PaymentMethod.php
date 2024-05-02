<?php

namespace App\Models;

use App\Models\Aggregator;
use App\Models\PaymentLink;
use App\Models\Transaction;
use App\Models\PaymentCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function aggegators() : BelongsToMany {
        return $this->belongsToMany(Aggregator::class);
    }

    public function category() : BelongsTo {
        return $this->belongsTo(PaymentCategory::class);
    }

    public function payment_links() : HasMany {
        return $this->hasMany(PaymentLink::class);
    }

    public function transactions() : HasMany {
        return $this->hasMany(Transaction::class);
    }


}
