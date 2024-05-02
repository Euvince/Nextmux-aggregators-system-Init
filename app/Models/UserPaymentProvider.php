<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPaymentProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'api_key',  'secret_key', 'public_key', 'app_id', 'status' , 'user_id'
    ];

    
    
}
