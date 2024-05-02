<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'api_key', 'status' 
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_payment_providers')->withTimestamps();
    }
}
