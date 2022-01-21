<?php

namespace App\Domains\Supplier\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'trading_name',
        'cnpj',
        'ie',
        'contact_phone',
        'contact_email'
    ];
}
