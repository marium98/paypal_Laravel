<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;
    const PAYMENT_COMPLETED = 1;
    const PAYMENT_PENDING = 0;

    protected $table = 'paypal'; 
    protected $fillable = ['amount','transaction_id','payment_status'];
}
