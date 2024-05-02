<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Company;
use App\Models\Payment;
use App\Models\Aggregator;
use App\Models\PaymentLink;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'public_key', 'secret_key'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function payment_links(){
        return $this->hasMany(PaymentLink::class);
    }
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function aggregator() : BelongsTo{
        return $this->belongsTo(Aggregator::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }


}
