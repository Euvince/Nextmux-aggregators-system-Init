<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AggregatorPM extends Model
{
    use HasFactory;

    protected $fillable = [
        'aggregator_id',
        'country_id'
    ];

}
