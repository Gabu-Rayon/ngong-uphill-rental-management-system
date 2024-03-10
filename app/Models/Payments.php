<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'tenant_id', 'amount', 'name', 'email', 'house_no',
         'category', 'payment_method', 
        'credit_account_code', 'mpesa_account_code', 
        'bank_account_code', 'card_holder_name', 'expiry_date',
         'cvv', 'visa_last_three_digits', 'invoice',
    ];
}