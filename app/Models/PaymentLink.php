<?php

namespace App\Models;

use App\Models\Application;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'content', 'rising', 'service_description'
    ];

    public function payment_method() : BelongsTo {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function application() : BelongsTo {
        return $this->belongsTo(Application::class);
    }

}
