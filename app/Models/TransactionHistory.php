<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_number',
        'transaction_name',
        'transaction_status',
        'transaction_rising',
        'transaction_processing_date'
    ];

    public function transaction() : BelongsTo {
        return $this->belongsTo(Transaction::class);
    }

}
