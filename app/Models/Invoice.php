<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['amount', 'invoice_number'];
    // /** @use HasFactory<\Database\Factories\InvoiceFactory> */
    // use HasFactory;
}
